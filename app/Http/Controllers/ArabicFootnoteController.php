<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArabicFootnoteRequest;
use App\Http\Requests\UpdateArabicFootnoteRequest;
use App\Repositories\ArabicFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArabicFootnoteController extends AppBaseController
{
    /** @var  ArabicFootnoteRepository */
    private $arabicFootnoteRepository;

    public function __construct(ArabicFootnoteRepository $arabicFootnoteRepo)
    {
        $this->arabicFootnoteRepository = $arabicFootnoteRepo;
    }

    /**
     * Display a listing of the ArabicFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $arabicFootnotes = $this->arabicFootnoteRepository->all();

        return view('arabic_footnotes.index')
            ->with('arabicFootnotes', $arabicFootnotes);
    }

    /**
     * Show the form for creating a new ArabicFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('arabic_footnotes.create');
    }

    /**
     * Store a newly created ArabicFootnote in storage.
     *
     * @param CreateArabicFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateArabicFootnoteRequest $request)
    {
        $input = $request->all();

        $arabicFootnote = $this->arabicFootnoteRepository->create($input);

        Flash::success('Arabic Footnote saved successfully.');

        return redirect(route('arabicFootnotes.index'));
    }

    /**
     * Display the specified ArabicFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arabicFootnote = $this->arabicFootnoteRepository->find($id);

        if (empty($arabicFootnote)) {
            Flash::error('Arabic Footnote not found');

            return redirect(route('arabicFootnotes.index'));
        }

        return view('arabic_footnotes.show')->with('arabicFootnote', $arabicFootnote);
    }

    /**
     * Show the form for editing the specified ArabicFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arabicFootnote = $this->arabicFootnoteRepository->find($id);

        if (empty($arabicFootnote)) {
            Flash::error('Arabic Footnote not found');

            return redirect(route('arabicFootnotes.index'));
        }

        return view('arabic_footnotes.edit')->with('arabicFootnote', $arabicFootnote);
    }

    /**
     * Update the specified ArabicFootnote in storage.
     *
     * @param int $id
     * @param UpdateArabicFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArabicFootnoteRequest $request)
    {
        $arabicFootnote = $this->arabicFootnoteRepository->find($id);

        if (empty($arabicFootnote)) {
            Flash::error('Arabic Footnote not found');

            return redirect(route('arabicFootnotes.index'));
        }

        $arabicFootnote = $this->arabicFootnoteRepository->update($request->all(), $id);

        Flash::success('Arabic Footnote updated successfully.');

        return redirect(route('arabicFootnotes.index'));
    }

    /**
     * Remove the specified ArabicFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arabicFootnote = $this->arabicFootnoteRepository->find($id);

        if (empty($arabicFootnote)) {
            Flash::error('Arabic Footnote not found');

            return redirect(route('arabicFootnotes.index'));
        }

        $this->arabicFootnoteRepository->delete($id);

        Flash::success('Arabic Footnote deleted successfully.');

        return redirect(route('arabicFootnotes.index'));
    }
}

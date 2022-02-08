<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUhtaylwinoowithcodeFootnoteRequest;
use App\Http\Requests\UpdateUhtaylwinoowithcodeFootnoteRequest;
use App\Repositories\UhtaylwinoowithcodeFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UhtaylwinoowithcodeFootnoteController extends AppBaseController
{
    /** @var  UhtaylwinoowithcodeFootnoteRepository */
    private $uhtaylwinoowithcodeFootnoteRepository;

    public function __construct(UhtaylwinoowithcodeFootnoteRepository $uhtaylwinoowithcodeFootnoteRepo)
    {
        $this->uhtaylwinoowithcodeFootnoteRepository = $uhtaylwinoowithcodeFootnoteRepo;
    }

    /**
     * Display a listing of the UhtaylwinoowithcodeFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uhtaylwinoowithcodeFootnotes = $this->uhtaylwinoowithcodeFootnoteRepository->all();

        return view('uhtaylwinoowithcode_footnotes.index')
            ->with('uhtaylwinoowithcodeFootnotes', $uhtaylwinoowithcodeFootnotes);
    }

    /**
     * Show the form for creating a new UhtaylwinoowithcodeFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('uhtaylwinoowithcode_footnotes.create');
    }

    /**
     * Store a newly created UhtaylwinoowithcodeFootnote in storage.
     *
     * @param CreateUhtaylwinoowithcodeFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateUhtaylwinoowithcodeFootnoteRequest $request)
    {
        $input = $request->all();

        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->create($input);

        Flash::success('Uhtaylwinoowithcode Footnote saved successfully.');

        return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
    }

    /**
     * Display the specified UhtaylwinoowithcodeFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->find($id);

        if (empty($uhtaylwinoowithcodeFootnote)) {
            Flash::error('Uhtaylwinoowithcode Footnote not found');

            return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
        }

        return view('uhtaylwinoowithcode_footnotes.show')->with('uhtaylwinoowithcodeFootnote', $uhtaylwinoowithcodeFootnote);
    }

    /**
     * Show the form for editing the specified UhtaylwinoowithcodeFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->find($id);

        if (empty($uhtaylwinoowithcodeFootnote)) {
            Flash::error('Uhtaylwinoowithcode Footnote not found');

            return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
        }

        return view('uhtaylwinoowithcode_footnotes.edit')->with('uhtaylwinoowithcodeFootnote', $uhtaylwinoowithcodeFootnote);
    }

    /**
     * Update the specified UhtaylwinoowithcodeFootnote in storage.
     *
     * @param int $id
     * @param UpdateUhtaylwinoowithcodeFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUhtaylwinoowithcodeFootnoteRequest $request)
    {
        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->find($id);

        if (empty($uhtaylwinoowithcodeFootnote)) {
            Flash::error('Uhtaylwinoowithcode Footnote not found');

            return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
        }

        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->update($request->all(), $id);

        Flash::success('Uhtaylwinoowithcode Footnote updated successfully.');

        return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
    }

    /**
     * Remove the specified UhtaylwinoowithcodeFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uhtaylwinoowithcodeFootnote = $this->uhtaylwinoowithcodeFootnoteRepository->find($id);

        if (empty($uhtaylwinoowithcodeFootnote)) {
            Flash::error('Uhtaylwinoowithcode Footnote not found');

            return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
        }

        $this->uhtaylwinoowithcodeFootnoteRepository->delete($id);

        Flash::success('Uhtaylwinoowithcode Footnote deleted successfully.');

        return redirect(route('uhtaylwinoowithcodeFootnotes.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUbaseinFootnoteRequest;
use App\Http\Requests\UpdateUbaseinFootnoteRequest;
use App\Repositories\UbaseinFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UbaseinFootnoteController extends AppBaseController
{
    /** @var  UbaseinFootnoteRepository */
    private $ubaseinFootnoteRepository;

    public function __construct(UbaseinFootnoteRepository $ubaseinFootnoteRepo)
    {
        $this->ubaseinFootnoteRepository = $ubaseinFootnoteRepo;
    }

    /**
     * Display a listing of the UbaseinFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ubaseinFootnotes = $this->ubaseinFootnoteRepository->all();

        return view('ubasein_footnotes.index')
            ->with('ubaseinFootnotes', $ubaseinFootnotes);
    }

    /**
     * Show the form for creating a new UbaseinFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('ubasein_footnotes.create');
    }

    /**
     * Store a newly created UbaseinFootnote in storage.
     *
     * @param CreateUbaseinFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateUbaseinFootnoteRequest $request)
    {
        $input = $request->all();

        $ubaseinFootnote = $this->ubaseinFootnoteRepository->create($input);

        Flash::success('Ubasein Footnote saved successfully.');

        return redirect(route('ubaseinFootnotes.index'));
    }

    /**
     * Display the specified UbaseinFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ubaseinFootnote = $this->ubaseinFootnoteRepository->find($id);

        if (empty($ubaseinFootnote)) {
            Flash::error('Ubasein Footnote not found');

            return redirect(route('ubaseinFootnotes.index'));
        }

        return view('ubasein_footnotes.show')->with('ubaseinFootnote', $ubaseinFootnote);
    }

    /**
     * Show the form for editing the specified UbaseinFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ubaseinFootnote = $this->ubaseinFootnoteRepository->find($id);

        if (empty($ubaseinFootnote)) {
            Flash::error('Ubasein Footnote not found');

            return redirect(route('ubaseinFootnotes.index'));
        }

        return view('ubasein_footnotes.edit')->with('ubaseinFootnote', $ubaseinFootnote);
    }

    /**
     * Update the specified UbaseinFootnote in storage.
     *
     * @param int $id
     * @param UpdateUbaseinFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUbaseinFootnoteRequest $request)
    {
        $ubaseinFootnote = $this->ubaseinFootnoteRepository->find($id);

        if (empty($ubaseinFootnote)) {
            Flash::error('Ubasein Footnote not found');

            return redirect(route('ubaseinFootnotes.index'));
        }

        $ubaseinFootnote = $this->ubaseinFootnoteRepository->update($request->all(), $id);

        Flash::success('Ubasein Footnote updated successfully.');

        return redirect(route('ubaseinFootnotes.index'));
    }

    /**
     * Remove the specified UbaseinFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubaseinFootnote = $this->ubaseinFootnoteRepository->find($id);

        if (empty($ubaseinFootnote)) {
            Flash::error('Ubasein Footnote not found');

            return redirect(route('ubaseinFootnotes.index'));
        }

        $this->ubaseinFootnoteRepository->delete($id);

        Flash::success('Ubasein Footnote deleted successfully.');

        return redirect(route('ubaseinFootnotes.index'));
    }
}

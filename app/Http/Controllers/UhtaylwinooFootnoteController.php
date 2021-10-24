<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUhtaylwinooFootnoteRequest;
use App\Http\Requests\UpdateUhtaylwinooFootnoteRequest;
use App\Repositories\UhtaylwinooFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UhtaylwinooFootnoteController extends AppBaseController
{
    /** @var  UhtaylwinooFootnoteRepository */
    private $uhtaylwinooFootnoteRepository;

    public function __construct(UhtaylwinooFootnoteRepository $uhtaylwinooFootnoteRepo)
    {
        $this->uhtaylwinooFootnoteRepository = $uhtaylwinooFootnoteRepo;
    }

    /**
     * Display a listing of the UhtaylwinooFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uhtaylwinooFootnotes = $this->uhtaylwinooFootnoteRepository->all();

        return view('uhtaylwinoo_footnotes.index')
            ->with('uhtaylwinooFootnotes', $uhtaylwinooFootnotes);
    }

    /**
     * Show the form for creating a new UhtaylwinooFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('uhtaylwinoo_footnotes.create');
    }

    /**
     * Store a newly created UhtaylwinooFootnote in storage.
     *
     * @param CreateUhtaylwinooFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateUhtaylwinooFootnoteRequest $request)
    {
        $input = $request->all();

        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->create($input);

        Flash::success('Uhtaylwinoo Footnote saved successfully.');

        return redirect(route('uhtaylwinooFootnotes.index'));
    }

    /**
     * Display the specified UhtaylwinooFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->find($id);

        if (empty($uhtaylwinooFootnote)) {
            Flash::error('Uhtaylwinoo Footnote not found');

            return redirect(route('uhtaylwinooFootnotes.index'));
        }

        return view('uhtaylwinoo_footnotes.show')->with('uhtaylwinooFootnote', $uhtaylwinooFootnote);
    }

    /**
     * Show the form for editing the specified UhtaylwinooFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->find($id);

        if (empty($uhtaylwinooFootnote)) {
            Flash::error('Uhtaylwinoo Footnote not found');

            return redirect(route('uhtaylwinooFootnotes.index'));
        }

        return view('uhtaylwinoo_footnotes.edit')->with('uhtaylwinooFootnote', $uhtaylwinooFootnote);
    }

    /**
     * Update the specified UhtaylwinooFootnote in storage.
     *
     * @param int $id
     * @param UpdateUhtaylwinooFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUhtaylwinooFootnoteRequest $request)
    {
        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->find($id);

        if (empty($uhtaylwinooFootnote)) {
            Flash::error('Uhtaylwinoo Footnote not found');

            return redirect(route('uhtaylwinooFootnotes.index'));
        }

        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->update($request->all(), $id);

        Flash::success('Uhtaylwinoo Footnote updated successfully.');

        return redirect(route('uhtaylwinooFootnotes.index'));
    }

    /**
     * Remove the specified UhtaylwinooFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uhtaylwinooFootnote = $this->uhtaylwinooFootnoteRepository->find($id);

        if (empty($uhtaylwinooFootnote)) {
            Flash::error('Uhtaylwinoo Footnote not found');

            return redirect(route('uhtaylwinooFootnotes.index'));
        }

        $this->uhtaylwinooFootnoteRepository->delete($id);

        Flash::success('Uhtaylwinoo Footnote deleted successfully.');

        return redirect(route('uhtaylwinooFootnotes.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGaziFootnoteRequest;
use App\Http\Requests\UpdateGaziFootnoteRequest;
use App\Repositories\GaziFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GaziFootnoteController extends AppBaseController
{
    /** @var  GaziFootnoteRepository */
    private $gaziFootnoteRepository;

    public function __construct(GaziFootnoteRepository $gaziFootnoteRepo)
    {
        $this->gaziFootnoteRepository = $gaziFootnoteRepo;
    }

    /**
     * Display a listing of the GaziFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gaziFootnotes = $this->gaziFootnoteRepository->all();

        return view('gazi_footnotes.index')
            ->with('gaziFootnotes', $gaziFootnotes);
    }

    /**
     * Show the form for creating a new GaziFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('gazi_footnotes.create');
    }

    /**
     * Store a newly created GaziFootnote in storage.
     *
     * @param CreateGaziFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateGaziFootnoteRequest $request)
    {
        $input = $request->all();

        $gaziFootnote = $this->gaziFootnoteRepository->create($input);

        Flash::success('Gazi Footnote saved successfully.');

        return redirect(route('gaziFootnotes.index'));
    }

    /**
     * Display the specified GaziFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gaziFootnote = $this->gaziFootnoteRepository->find($id);

        if (empty($gaziFootnote)) {
            Flash::error('Gazi Footnote not found');

            return redirect(route('gaziFootnotes.index'));
        }

        return view('gazi_footnotes.show')->with('gaziFootnote', $gaziFootnote);
    }

    /**
     * Show the form for editing the specified GaziFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gaziFootnote = $this->gaziFootnoteRepository->find($id);

        if (empty($gaziFootnote)) {
            Flash::error('Gazi Footnote not found');

            return redirect(route('gaziFootnotes.index'));
        }

        return view('gazi_footnotes.edit')->with('gaziFootnote', $gaziFootnote);
    }

    /**
     * Update the specified GaziFootnote in storage.
     *
     * @param int $id
     * @param UpdateGaziFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaziFootnoteRequest $request)
    {
        $gaziFootnote = $this->gaziFootnoteRepository->find($id);

        if (empty($gaziFootnote)) {
            Flash::error('Gazi Footnote not found');

            return redirect(route('gaziFootnotes.index'));
        }

        $gaziFootnote = $this->gaziFootnoteRepository->update($request->all(), $id);

        Flash::success('Gazi Footnote updated successfully.');

        return redirect(route('gaziFootnotes.index'));
    }

    /**
     * Remove the specified GaziFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gaziFootnote = $this->gaziFootnoteRepository->find($id);

        if (empty($gaziFootnote)) {
            Flash::error('Gazi Footnote not found');

            return redirect(route('gaziFootnotes.index'));
        }

        $this->gaziFootnoteRepository->delete($id);

        Flash::success('Gazi Footnote deleted successfully.');

        return redirect(route('gaziFootnotes.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHtayLwinOoRequest;
use App\Http\Requests\UpdateHtayLwinOoRequest;
use App\Repositories\HtayLwinOoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HtayLwinOoController extends AppBaseController
{
    /** @var  HtayLwinOoRepository */
    private $htayLwinOoRepository;

    public function __construct(HtayLwinOoRepository $htayLwinOoRepo)
    {
        $this->htayLwinOoRepository = $htayLwinOoRepo;
    }

    /**
     * Display a listing of the HtayLwinOo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $htayLwinOos = $this->htayLwinOoRepository->paginate(10);

        return view('htay_lwin_oos.index')
            ->with('htayLwinOos', $htayLwinOos);
    }

    /**
     * Show the form for creating a new HtayLwinOo.
     *
     * @return Response
     */
    public function create()
    {
        return view('htay_lwin_oos.create');
    }

    /**
     * Store a newly created HtayLwinOo in storage.
     *
     * @param CreateHtayLwinOoRequest $request
     *
     * @return Response
     */
    public function store(CreateHtayLwinOoRequest $request)
    {
        $input = $request->all();

        $htayLwinOo = $this->htayLwinOoRepository->create($input);

        Flash::success('Htay Lwin Oo saved successfully.');

        return redirect(route('htayLwinOos.index'));
    }

    /**
     * Display the specified HtayLwinOo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $htayLwinOo = $this->htayLwinOoRepository->find($id);

        if (empty($htayLwinOo)) {
            Flash::error('Htay Lwin Oo not found');

            return redirect(route('htayLwinOos.index'));
        }

        return view('htay_lwin_oos.show')->with('htayLwinOo', $htayLwinOo);
    }

    /**
     * Show the form for editing the specified HtayLwinOo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $htayLwinOo = $this->htayLwinOoRepository->find($id);

        if (empty($htayLwinOo)) {
            Flash::error('Htay Lwin Oo not found');

            return redirect(route('htayLwinOos.index'));
        }

        return view('htay_lwin_oos.edit')->with('htayLwinOo', $htayLwinOo);
    }

    /**
     * Update the specified HtayLwinOo in storage.
     *
     * @param int $id
     * @param UpdateHtayLwinOoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHtayLwinOoRequest $request)
    {
        $htayLwinOo = $this->htayLwinOoRepository->find($id);

        if (empty($htayLwinOo)) {
            Flash::error('Htay Lwin Oo not found');

            return redirect(route('htayLwinOos.index'));
        }

        $htayLwinOo = $this->htayLwinOoRepository->update($request->all(), $id);

        Flash::success('Htay Lwin Oo updated successfully.');

        return redirect(route('htayLwinOos.index'));
    }

    /**
     * Remove the specified HtayLwinOo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $htayLwinOo = $this->htayLwinOoRepository->find($id);

        if (empty($htayLwinOo)) {
            Flash::error('Htay Lwin Oo not found');

            return redirect(route('htayLwinOos.index'));
        }

        $this->htayLwinOoRepository->delete($id);

        Flash::success('Htay Lwin Oo deleted successfully.');

        return redirect(route('htayLwinOos.index'));
    }
}

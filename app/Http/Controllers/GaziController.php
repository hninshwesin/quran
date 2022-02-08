<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGaziRequest;
use App\Http\Requests\UpdateGaziRequest;
use App\Repositories\GaziRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GaziController extends AppBaseController
{
    /** @var  GaziRepository */
    private $gaziRepository;

    public function __construct(GaziRepository $gaziRepo)
    {
        $this->gaziRepository = $gaziRepo;
    }

    /**
     * Display a listing of the Gazi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gazis = $this->gaziRepository->paginate(10);

        return view('gazis.index')
            ->with('gazis', $gazis);
    }

    /**
     * Show the form for creating a new Gazi.
     *
     * @return Response
     */
    public function create()
    {
        return view('gazis.create');
    }

    /**
     * Store a newly created Gazi in storage.
     *
     * @param CreateGaziRequest $request
     *
     * @return Response
     */
    public function store(CreateGaziRequest $request)
    {
        $input = $request->all();

        $gazi = $this->gaziRepository->create($input);

        Flash::success('Gazi saved successfully.');

        return redirect(route('gazis.index'));
    }

    /**
     * Display the specified Gazi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gazi = $this->gaziRepository->find($id);

        if (empty($gazi)) {
            Flash::error('Gazi not found');

            return redirect(route('gazis.index'));
        }

        return view('gazis.show')->with('gazi', $gazi);
    }

    /**
     * Show the form for editing the specified Gazi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gazi = $this->gaziRepository->find($id);

        if (empty($gazi)) {
            Flash::error('Gazi not found');

            return redirect(route('gazis.index'));
        }

        return view('gazis.edit')->with('gazi', $gazi);
    }

    /**
     * Update the specified Gazi in storage.
     *
     * @param int $id
     * @param UpdateGaziRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaziRequest $request)
    {
        $gazi = $this->gaziRepository->find($id);

        if (empty($gazi)) {
            Flash::error('Gazi not found');

            return redirect(route('gazis.index'));
        }

        $gazi = $this->gaziRepository->update($request->all(), $id);

        Flash::success('Gazi updated successfully.');

        return redirect(route('gazis.index'));
    }

    /**
     * Remove the specified Gazi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gazi = $this->gaziRepository->find($id);

        if (empty($gazi)) {
            Flash::error('Gazi not found');

            return redirect(route('gazis.index'));
        }

        $this->gaziRepository->delete($id);

        Flash::success('Gazi deleted successfully.');

        return redirect(route('gazis.index'));
    }
}

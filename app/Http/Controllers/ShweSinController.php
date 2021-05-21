<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShweSinRequest;
use App\Http\Requests\UpdateShweSinRequest;
use App\Repositories\ShweSinRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShweSinController extends AppBaseController
{
    /** @var  ShweSinRepository */
    private $shweSinRepository;

    public function __construct(ShweSinRepository $shweSinRepo)
    {
        $this->shweSinRepository = $shweSinRepo;
    }

    /**
     * Display a listing of the ShweSin.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shweSins = $this->shweSinRepository->paginate(10);

        return view('shwe_sins.index')
            ->with('shweSins', $shweSins);
    }

    /**
     * Show the form for creating a new ShweSin.
     *
     * @return Response
     */
    public function create()
    {
        return view('shwe_sins.create');
    }

    /**
     * Store a newly created ShweSin in storage.
     *
     * @param CreateShweSinRequest $request
     *
     * @return Response
     */
    public function store(CreateShweSinRequest $request)
    {
        $input = $request->all();

        $shweSin = $this->shweSinRepository->create($input);

        Flash::success('Shwe Sin saved successfully.');

        return redirect(route('shweSins.index'));
    }

    /**
     * Display the specified ShweSin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shweSin = $this->shweSinRepository->find($id);

        if (empty($shweSin)) {
            Flash::error('Shwe Sin not found');

            return redirect(route('shweSins.index'));
        }

        return view('shwe_sins.show')->with('shweSin', $shweSin);
    }

    /**
     * Show the form for editing the specified ShweSin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shweSin = $this->shweSinRepository->find($id);

        if (empty($shweSin)) {
            Flash::error('Shwe Sin not found');

            return redirect(route('shweSins.index'));
        }

        return view('shwe_sins.edit')->with('shweSin', $shweSin);
    }

    /**
     * Update the specified ShweSin in storage.
     *
     * @param int $id
     * @param UpdateShweSinRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShweSinRequest $request)
    {
        $shweSin = $this->shweSinRepository->find($id);

        if (empty($shweSin)) {
            Flash::error('Shwe Sin not found');

            return redirect(route('shweSins.index'));
        }

        $shweSin = $this->shweSinRepository->update($request->all(), $id);

        Flash::success('Shwe Sin updated successfully.');

        return redirect(route('shweSins.index'));
    }

    /**
     * Remove the specified ShweSin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shweSin = $this->shweSinRepository->find($id);

        if (empty($shweSin)) {
            Flash::error('Shwe Sin not found');

            return redirect(route('shweSins.index'));
        }

        $this->shweSinRepository->delete($id);

        Flash::success('Shwe Sin deleted successfully.');

        return redirect(route('shweSins.index'));
    }
}

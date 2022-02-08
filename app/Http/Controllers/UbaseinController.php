<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUbaseinRequest;
use App\Http\Requests\UpdateUbaseinRequest;
use App\Repositories\UbaseinRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UbaseinController extends AppBaseController
{
    /** @var  UbaseinRepository */
    private $ubaseinRepository;

    public function __construct(UbaseinRepository $ubaseinRepo)
    {
        $this->ubaseinRepository = $ubaseinRepo;
    }

    /**
     * Display a listing of the Ubasein.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ubaseins = $this->ubaseinRepository->paginate(10);

        return view('ubaseins.index')
            ->with('ubaseins', $ubaseins);
    }

    /**
     * Show the form for creating a new Ubasein.
     *
     * @return Response
     */
    public function create()
    {
        return view('ubaseins.create');
    }

    /**
     * Store a newly created Ubasein in storage.
     *
     * @param CreateUbaseinRequest $request
     *
     * @return Response
     */
    public function store(CreateUbaseinRequest $request)
    {
        $input = $request->all();

        $ubasein = $this->ubaseinRepository->create($input);

        Flash::success('Ubasein saved successfully.');

        return redirect(route('ubaseins.index'));
    }

    /**
     * Display the specified Ubasein.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ubasein = $this->ubaseinRepository->find($id);

        if (empty($ubasein)) {
            Flash::error('Ubasein not found');

            return redirect(route('ubaseins.index'));
        }

        return view('ubaseins.show')->with('ubasein', $ubasein);
    }

    /**
     * Show the form for editing the specified Ubasein.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ubasein = $this->ubaseinRepository->find($id);

        if (empty($ubasein)) {
            Flash::error('Ubasein not found');

            return redirect(route('ubaseins.index'));
        }

        return view('ubaseins.edit')->with('ubasein', $ubasein);
    }

    /**
     * Update the specified Ubasein in storage.
     *
     * @param int $id
     * @param UpdateUbaseinRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUbaseinRequest $request)
    {
        $ubasein = $this->ubaseinRepository->find($id);

        if (empty($ubasein)) {
            Flash::error('Ubasein not found');

            return redirect(route('ubaseins.index'));
        }

        $ubasein = $this->ubaseinRepository->update($request->all(), $id);

        Flash::success('Ubasein updated successfully.');

        return redirect(route('ubaseins.index'));
    }

    /**
     * Remove the specified Ubasein from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubasein = $this->ubaseinRepository->find($id);

        if (empty($ubasein)) {
            Flash::error('Ubasein not found');

            return redirect(route('ubaseins.index'));
        }

        $this->ubaseinRepository->delete($id);

        Flash::success('Ubasein deleted successfully.');

        return redirect(route('ubaseins.index'));
    }
}

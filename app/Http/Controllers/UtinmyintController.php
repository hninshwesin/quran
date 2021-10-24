<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUtinmyintRequest;
use App\Http\Requests\UpdateUtinmyintRequest;
use App\Repositories\UtinmyintRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UtinmyintController extends AppBaseController
{
    /** @var  UtinmyintRepository */
    private $utinmyintRepository;

    public function __construct(UtinmyintRepository $utinmyintRepo)
    {
        $this->utinmyintRepository = $utinmyintRepo;
    }

    /**
     * Display a listing of the Utinmyint.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $utinmyints = $this->utinmyintRepository->paginate(10);

        return view('utinmyints.index')
            ->with('utinmyints', $utinmyints);
    }

    /**
     * Show the form for creating a new Utinmyint.
     *
     * @return Response
     */
    public function create()
    {
        return view('utinmyints.create');
    }

    /**
     * Store a newly created Utinmyint in storage.
     *
     * @param CreateUtinmyintRequest $request
     *
     * @return Response
     */
    public function store(CreateUtinmyintRequest $request)
    {
        $input = $request->all();

        $utinmyint = $this->utinmyintRepository->create($input);

        Flash::success('Utinmyint saved successfully.');

        return redirect(route('utinmyints.index'));
    }

    /**
     * Display the specified Utinmyint.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $utinmyint = $this->utinmyintRepository->find($id);

        if (empty($utinmyint)) {
            Flash::error('Utinmyint not found');

            return redirect(route('utinmyints.index'));
        }

        return view('utinmyints.show')->with('utinmyint', $utinmyint);
    }

    /**
     * Show the form for editing the specified Utinmyint.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $utinmyint = $this->utinmyintRepository->find($id);

        if (empty($utinmyint)) {
            Flash::error('Utinmyint not found');

            return redirect(route('utinmyints.index'));
        }

        return view('utinmyints.edit')->with('utinmyint', $utinmyint);
    }

    /**
     * Update the specified Utinmyint in storage.
     *
     * @param int $id
     * @param UpdateUtinmyintRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUtinmyintRequest $request)
    {
        $utinmyint = $this->utinmyintRepository->find($id);

        if (empty($utinmyint)) {
            Flash::error('Utinmyint not found');

            return redirect(route('utinmyints.index'));
        }

        $utinmyint = $this->utinmyintRepository->update($request->all(), $id);

        Flash::success('Utinmyint updated successfully.');

        return redirect(route('utinmyints.index'));
    }

    /**
     * Remove the specified Utinmyint from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $utinmyint = $this->utinmyintRepository->find($id);

        if (empty($utinmyint)) {
            Flash::error('Utinmyint not found');

            return redirect(route('utinmyints.index'));
        }

        $this->utinmyintRepository->delete($id);

        Flash::success('Utinmyint deleted successfully.');

        return redirect(route('utinmyints.index'));
    }
}

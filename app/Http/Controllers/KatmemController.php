<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKatmemRequest;
use App\Http\Requests\UpdateKatmemRequest;
use App\Repositories\KatmemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KatmemController extends AppBaseController
{
    /** @var  KatmemRepository */
    private $katmemRepository;

    public function __construct(KatmemRepository $katmemRepo)
    {
        $this->katmemRepository = $katmemRepo;
    }

    /**
     * Display a listing of the Katmem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->katmemRepository->pushCriteria(new RequestCriteria($request));
        $katmems = $this->katmemRepository->all();

        return view('katmems.index')
            ->with('katmems', $katmems);
    }

    /**
     * Show the form for creating a new Katmem.
     *
     * @return Response
     */
    public function create()
    {
        return view('katmems.create');
    }

    /**
     * Store a newly created Katmem in storage.
     *
     * @param CreateKatmemRequest $request
     *
     * @return Response
     */
    public function store(CreateKatmemRequest $request)
    {
        $input = $request->all();

        $katmem = $this->katmemRepository->create($input);

        Flash::success('Katmem saved successfully.');

        return redirect(route('katmems.index'));
    }

    /**
     * Display the specified Katmem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            Flash::error('Katmem not found');

            return redirect(route('katmems.index'));
        }

        return view('katmems.show')->with('katmem', $katmem);
    }

    /**
     * Show the form for editing the specified Katmem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            Flash::error('Katmem not found');

            return redirect(route('katmems.index'));
        }

        return view('katmems.edit')->with('katmem', $katmem);
    }

    /**
     * Update the specified Katmem in storage.
     *
     * @param  int              $id
     * @param UpdateKatmemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKatmemRequest $request)
    {
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            Flash::error('Katmem not found');

            return redirect(route('katmems.index'));
        }

        $katmem = $this->katmemRepository->update($request->all(), $id);

        Flash::success('Katmem updated successfully.');

        return redirect(route('katmems.index'));
    }

    /**
     * Remove the specified Katmem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            Flash::error('Katmem not found');

            return redirect(route('katmems.index'));
        }

        $this->katmemRepository->delete($id);

        Flash::success('Katmem deleted successfully.');

        return redirect(route('katmems.index'));
    }
}

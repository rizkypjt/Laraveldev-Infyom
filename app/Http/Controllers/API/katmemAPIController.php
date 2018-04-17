<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatekatmemAPIRequest;
use App\Http\Requests\API\UpdatekatmemAPIRequest;
use App\Models\katmem;
use App\Repositories\katmemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class katmemController
 * @package App\Http\Controllers\API
 */

class katmemAPIController extends AppBaseController
{
    /** @var  katmemRepository */
    private $katmemRepository;

    public function __construct(katmemRepository $katmemRepo)
    {
        $this->katmemRepository = $katmemRepo;
    }

    /**
     * Display a listing of the katmem.
     * GET|HEAD /katmems
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->katmemRepository->pushCriteria(new RequestCriteria($request));
        $this->katmemRepository->pushCriteria(new LimitOffsetCriteria($request));
        $katmems = $this->katmemRepository->all();

        return $this->sendResponse($katmems->toArray(), 'Katmems retrieved successfully');
    }

    /**
     * Store a newly created katmem in storage.
     * POST /katmems
     *
     * @param CreatekatmemAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatekatmemAPIRequest $request)
    {
        $input = $request->all();

        $katmems = $this->katmemRepository->create($input);

        return $this->sendResponse($katmems->toArray(), 'Katmem saved successfully');
    }

    /**
     * Display the specified katmem.
     * GET|HEAD /katmems/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var katmem $katmem */
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            return $this->sendError('Katmem not found');
        }

        return $this->sendResponse($katmem->toArray(), 'Katmem retrieved successfully');
    }

    /**
     * Update the specified katmem in storage.
     * PUT/PATCH /katmems/{id}
     *
     * @param  int $id
     * @param UpdatekatmemAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekatmemAPIRequest $request)
    {
        $input = $request->all();

        /** @var katmem $katmem */
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            return $this->sendError('Katmem not found');
        }

        $katmem = $this->katmemRepository->update($input, $id);

        return $this->sendResponse($katmem->toArray(), 'katmem updated successfully');
    }

    /**
     * Remove the specified katmem from storage.
     * DELETE /katmems/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var katmem $katmem */
        $katmem = $this->katmemRepository->findWithoutFail($id);

        if (empty($katmem)) {
            return $this->sendError('Katmem not found');
        }

        $katmem->delete();

        return $this->sendResponse($id, 'Katmem deleted successfully');
    }
}

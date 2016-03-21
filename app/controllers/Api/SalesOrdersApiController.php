<?php

use League\Fractal;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Collection;

class SalesOrdersApiController extends ApiController {

    /**
     * Display a listing of sales orders
     *
     * @return Response
     */
    public function index()
    {
        $salesorders = SalesOrder::orderBy('sales_order_id', 'DESC');

        $total = $salesorders->count();
        $per_page = Input::get('per_page', 10);

        $resource = new Collection($salesorders->paginate($per_page), new SalesOrderTransformer);
        $data = $this->createReponseData($resource);

        $rdata = ['total'=> $total, 'per_page'=> $per_page, 'page'=> \Input::get('page', 1)];
        return $this->response($data['data'], "loaded sales orders successfully", $rdata);
    }


    /**
     * Store a newly created sales order in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), SalesOrder::$rules);

        if ($validator->fails())
        {
            $messages = $validator->messages();
            return $this->respondWithError("Validation Error", $messages);
        }

        $salesorder = SalesOrder::create($data);

        $resource = new Item($salesorder, new SalesOrderTransformer);
        $data = $this->createReponseData($resource);

        return $this->response($data['data'], "Successfully Stored a new sales order");
    }

    /**
     * Display the specified sales order.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $salesorder = SalesOrder::findOrFail($id);

        $resource = new Item($salesorder, new SalesOrderTransformer);
        $data = $this->createReponseData($resource);

        return $this->response($data, "successfully loaded a sales order");
    }


    /**
     * Update the specified sales order in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $salesorder = SalesOrder::findOrFail($id);

        $validator = Validator::make($data = Input::all(), SalesOrder::$rules);

        if ($validator->fails())
        {
            $messages = $validator->messages();
            return $this->respondWithError("Validation Error", $messages);
        }

        $salesorder->update($data);

        return $this->response($data, "Successfully updated a sales order");
    }

    /**
     * Remove the specified sales order from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        SalesOrder::destroy($id);

        return $this->response($id, "Successfully deleted a sales order");
    }

}
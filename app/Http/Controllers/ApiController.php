<?php

namespace App\Http\Controllers;

use Dingo\Api\Exception\ResourceException;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * @param array $rules
     * @param array $messages
     * @param array $customAttributes
     * @return array|mixed
     */
    public function validate(array $rules, array $messages = [], array $customAttributes = [])
    {
        $validator = Validator::make(request()->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            $name = $validator->errors()->keys()[0];
            throw new ResourceException(
                trans(str_replace('validation.', "validation.{$name}.", $validator->errors()->first($name)))
            );
        }
    }

    /**
     * @param string $message
     * @param array $data
     * @param $trans_data
     * @return mixed
     */
    public function success($data = null, $message = 'success', $trans_data = [])
    {
        $res = ['status_code' => 1, 'message' => trans('messages.' . $message, $trans_data)];
        if ($data) $res = array_merge($res, ['data' => $data]);
        return $this->toJson($res);
    }


    /**
     * @param string $message
     * @param array $trans_data
     * @param int $status
     * @return mixed
     */
    public function error($message = 'error', $trans_data = [], $status = 400)
    {
        return $this->toJson([
            'status_code' => $status,
            'message' => trans('messages.' . $message, $trans_data)
        ])->setStatusCode($status);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function toJson($data)
    {
        return $this->response->array($data);
    }
}

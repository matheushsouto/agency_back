<?php

namespace Modules\Booking\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    private $isIncluded = [];

    public function CheckIncludes($request, $include)
    {
        $includes = $request->get('include', '');
        $includes = explode(',', $includes);
        if(in_array($include, $includes) && !in_array($include, $this->isIncluded)){
            $this->isIncluded[] = $include;
            return true;
        }
        return false;
    }
}

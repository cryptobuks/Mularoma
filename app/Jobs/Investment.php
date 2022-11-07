<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\InvPackages;
use App\Investments;
use Carbon\Carbon;

class Investment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id,$daily,$status,$earnings,$running_days,$running_time,$end_date,$created_at;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id,$daily,$earnings,$status,$running_days,$running_time,$end_date,$created_at)
    {
        //

        $this->id=$id;
        $this->daily=$daily;
        $this->status=$status;
        $this->earnings=$earnings;
        $this->running_days=$running_days;
        $this->running_time=$running_time;
        $this->end_date=$end_date;
        $this->created_at=$created_at;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        # code...
                // return $this;

                //get the end date
                //process this data in a queue
                $date=$this->end_date;

                // return $date;
                $datework = Carbon::createFromDate($date);
                $now = Carbon::now()->format('Y:m:d H:i:s');

                $created_at=$this->created_at;

                $remaining_days = $datework->diffInDays($now);

                $testdate=$datework->diffInDays($created_at);

                $running=$testdate-$remaining_days;

                // return $running;

                

                //check if this is the same as in running days
                if((!($running==$this->running_days)) ){

                    //check if the current time is greater than running time
                    $now = Carbon::now()->format('H:i:s');

                    if($now>=$this->running_time){

                        //update the running days

                        $running_days=$this->running_days;

                        $running_days=$running_days+1;

                        //update the earnings

                        $earnings=$this->earnings;

                        $daily=$this->daily;

                        $newearnings=$earnings+$daily;

                        $update=Investments::where('id',$this->id)->update(['earnings'=>$newearnings,'running_days'=>$running_days]);


                        if($update){
                            return response(200);
                        }else{
                            return response(500);
                        }

                    }


                }else{

                    return response(500);

                }
    }
}

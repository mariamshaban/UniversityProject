<div class="row">
    @if(count($search)>0)
    @foreach($search as $university)
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="schedule-box maxwidth500 bg-light mb-30">
                <div class="thumb">
                    <a href="{{url('university')}}">
                        <img class="img-fullwidth" alt="" src="{{url('uploads/university')}}/{{$university->image}}">
                    </a>
                    <div style="padding:10px 3px" class="overlay text-center">
                        <a href="{{url('university')}}/{{$university->id}}">{{$university->name_en}} </a> <br>
                        <a href="{{url('university')}}/{{$university->id}}">{{$university->name_ar}}  </a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
    @else
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                    <div class="thumb">

                        <h2 style="text-align: center">No Results Found </h2>
                    </div>
                    </div>
                    </div>
        </div>
    @endif





</div>

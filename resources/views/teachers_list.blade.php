@foreach($teacher as $value)
     {{$value->name}}
     {{$value->address}}
     {{$value->email}}
     {{$value->contact_number}}
     {{$value->image}}
     {{--{{asset('user_images/'.$value->image)}}--}}
     <img src="{{asset('user_images/'.$value->image)}}" width="100px" height="150px">
     {{$value->qualification}}


    @endforeach

{{--{{$teacher-> name}}--}}
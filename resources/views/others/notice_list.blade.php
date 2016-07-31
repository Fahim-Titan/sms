@foreach($notice_list as $info)
    <a href="{{asset('files/'.$info->file_path)}}">{{$info->file_path}}</a><br>
    @endforeach
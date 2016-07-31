@foreach($teacher_list as $info)
    Name: {{$info->name}} <br>
    DOB: {{$info->dob}} <br>
    Address: {{$info->address}} <br>
    Email: {{$info->email}} <br>
    Contact: {{$info->contact_number}} <br>
@endforeach
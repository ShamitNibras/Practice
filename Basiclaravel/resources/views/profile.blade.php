<h1 style="font-family:'Gill Sans'; text-align:center">Hi, Welcome to my Profile</h1>
<h2 >Name:{{$name}}</h2>
<h2 >ID:{{$id}}</h2>
<h2 >Date of Birth:{{$dob}}</h2>
<h3 style="font-family:'Gill Sans'; color:#A267AC">Some of my Friends</h3>
<ul>
    @foreach($names as $n)
    <li>
        {{$n}}
    </li>
    @endforeach
</ul>
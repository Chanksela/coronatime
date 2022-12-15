<div style="
    width: 100%;
    height: 100%;
    display: table;
  ">
    <div style="vertical-align: middle; display: table-cell; text-align: center">

        <img src="{{ url('/images/verification.png') }}" style="width:40%; margin-bottom: 0" />
        <div style="font-size: 2em; font-weight: 600">Confirmation Email</div><br>
        <div style="font-size: 1em">click this button to verify your email</div>
        <br>
        <br>
        <a href="{{ route('verify.user', ['token' => $user_data['token']]) }}"
            style="
                background-color: #0FBA68;  
                width: 30%;
                display: inline-block;
                padding:1em;
                border-radius: 5px;
                color: white;
                font-weight: 600;
                font-size: 1em;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                ">
            verify email
        </a>
    </div>
</div>

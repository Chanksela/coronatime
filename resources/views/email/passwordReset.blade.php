<div style="
    width: 100%;
    height: 100%;
    display: table;
  ">
    <div style="vertical-align: middle; display: table-cell; text-align: center">

        <img src="{{ url('/images/verification.png') }}" style="width:40%; margin-bottom: 0" />
        <div style="font-size: 2em; font-weight: 600">Password Reset</div><br>
        <div style="font-size: 1em">click this button to reset your password</div>
        <br>
        <br>
        <a href="{{ route('password.edit', ['token' => $token]) }}"
            style="
                background-color: #0FBA68;  
                width: 30%;
                display: inline-block;
                padding: 1em;
                border-radius: 5px;
                color: white;
                font-weight: 900;
                font-size: 1em;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                ">
            reset password
        </a>
    </div>
</div>

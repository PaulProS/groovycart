To verify your account
<a href="{{route('emailVerificationDone',['email' => $user->email, 'verifyToken' => $user->verifytoken])}}">click here</a>
<p>Hello.</p>

<p> Recently this email : {{ $user->email }} was requesting password reset in our application. To reset your password, complete this form: </p>

<p>{{ URL::route('auth_reset', $token).'?email='.$user->email }}</p>

<p>See you in the application!</p>
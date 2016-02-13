<p>Hello.</p>

<p>Recently this email : {{ $user->email }} was trying to register a new account in our application. If you have requested that account, you could activate your account by simply follow bellow link :</p>

<p>{{ URL::route('auth_activate').'?email='.urlencode($user->email).'&code='.$user->getActivationCode() }}</p>

<p>See you in the application!</p>
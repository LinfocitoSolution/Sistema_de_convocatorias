Hello <i>{{ $model->receiver }}</i>,
<p>This is a demo email for testing purposes! Also, it's the HTML version.</p>
 
<p><u>Demo object values:</u></p>
 
<div>
<p><b>Demo One:</b>&nbsp;{{ $model->demo_one }}</p>
<p><b>Demo Two:</b>&nbsp;{{ $model->demo_two }}</p>
</div>
 
<p><u>Values passed by With method:</u></p>
 
<div>
<p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
<p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
<a href="http://127.0.0.1:8000/reset"></a>
</div>
 
Thank You,
<br/>
<i>{{ $model->sender }}</i>
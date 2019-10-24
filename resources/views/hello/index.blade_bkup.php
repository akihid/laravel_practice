
@section('content')
  <p>本文のコンテンツ</p>
  <p>必要なだけ記述可能</p>

  @each('components.item', $data, 'item')

  @component('components.message')
    @slot('msg_title')
      CAUTION!
    @endslot

    @slot('msg_content')
      メッセージの表示です
    @endslot
  @endcomponent
@endsection


<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body{ font-size:16px; color:#999; }
      h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>

    <p>&#064;whileの例</p>
    <ol>
      @php
        $counter = 0;
      @endphp
      @while ($counter < count($data))
        <li>{{$data[$counter]}}</li>
        @php
          $counter++;
        @endphp
      @endwhile
    </ol>-->
    <p>&#054;forの例</p> 
    <ol>
      @foreach ($data as $item)
        @if ($loop->first)
          <p>※データ一覧</p><ul>
        @endif
        <li>No, {{$loop->iteration}}. {{$item}}</li>
        @if ($loop->last)
          </ul><p>---ここまで</p>
        @endif
      @endforeach
    </ol>


    <p>&#064;foreachディレクティブの例</p>
    <ol>
      @foreach($data as $item)
      <li>{{$item}}
      @endforeach
    </ol>

    @isset ($msg)
      <p>こんにちわ{{$msg}}さん</p>
    @else
      <p>なにか書いてください</p>
    @endisset
    <form method="POST" action="/hello">
      {{ csrf_field()}}
      <input type="text" name="msg">
      <input type="submit">
    </form>
</body>
</html>
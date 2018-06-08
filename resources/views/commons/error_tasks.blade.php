@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <!--この下の行はコメントアウトしてよいと判断、。
            <li>{{ $error }}</li>
            -->
            <div class="alert alert-warning">{{ $error }}</div>
        @endforeach
    </ul>
@endif

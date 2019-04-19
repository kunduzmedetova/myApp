@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добро пожаловать!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Вам предоставлен доступ к данным курса валют!
                        <?php
                        if (isset($conversionResult)){
                            echo '1 EURO ='.round($conversionResult['rates']['UZS'],2).' UZS<br >';
                            echo '1 USD ='.round($conversionResult['rates']['UZS']*(1/$conversionResult['rates']['USD']),2).' UZS<br >';
                            echo '1 RUB ='.round($conversionResult['rates']['UZS']*(1/$conversionResult['rates']['RUB']),2).' UZS<br >';
                            echo '1 KZT ='.round($conversionResult['rates']['UZS']*(1/$conversionResult['rates']['KZT']),2).' UZS<br >';
                            echo '1 CNY ='.round($conversionResult['rates']['UZS']*(1/$conversionResult['rates']['CNY']),2).' UZS<br >';
                        } else{
                            echo "No data";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

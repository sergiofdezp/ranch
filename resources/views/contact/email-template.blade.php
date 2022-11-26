<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <p><strong>Nombre:</strong> {!! $name !!}</p>
                <p><strong>Email:</strong> {!! $emailFrom !!}</p>
                <p><strong>Asunto:</strong> {!! $subject !!}</p>
            </div>
            <div class="card-body">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    <br>
                    <p><strong>Mensaje:</strong> {!! $content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="body">
            <h6>Add Your Social Media Link</h6>
            <form action="{{ route('social.insert') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="nameInput">Media Name</label>
                    <input type="text" name="name" id="nameInput" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="iconInput">Media Icon</label>
                    <input type="file" name="icon" id="iconInput" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="linkInput">Media Link</label>
                    <input type="text" name="link" id="linkInput" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">INSERT</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="body">
            <h6>Connected Social Media</h6>
            <ul class="list-unstyled list-connected-app">
                @foreach ($socials as $social)
                <li>
                    <div class="connected-app">
                        <i class="app-icon {{ $social->icon }}"></i>
                        <div class="connection-info">
                            <h3 class="app-title">{{ $social->name }}</h3>
                            <span class="actions">
                                <a href="{{ $social->link }}" class="badge badge-info"><i class="fa fa-link"></i>Hit Link</a> 
                                <button href="type" value="$social->id" data-toggle="modal" class="badge badge-danger editbtn" data-target="#defaultModal">
                                    <i class="fa fa-edit"></i><span>Edit Media</span>
                                </button>   
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- Modal Dialogs ========= --> 
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    {{-- <h3 class="text-center mb-2">{{ $getSocials->name }}</h3> --}}
                    {{-- <form action="{{ route('social.update',$getSocials->id) }}" method="POST">@csrf --}}
                    <form action="" method="POST">@csrf
                        <div class="form-group">
                            <label for="nameInput">Media Name</label>
                            <input type="text" name="name" id="nameInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="iconInput">Media Icon</label>
                            <input type="text" name="icon" id="iconInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="linkInput">Media Link</label>
                            <input type="text" name="link" id="linkInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">INSERT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
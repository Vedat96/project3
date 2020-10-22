<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        
        <div class="row">
            <div class="row col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">
            <h1>Create new user </h1>
              <div class="row  col-md-12 col-lg-12 col-sm-12" >

                <form method="post" action="{{ route('users.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="user-firstname">First name<span class="required">*</span></label>
                        <input   placeholder="Enter firstname"  
                                  id="user-firstname"
                                  required
                                  name="firstname"
                                  spellcheck="false"
                                  class="form-control"
                                   />
                    </div>

                    <div class="form-group">
                        <label for="user-lastname">Lastname<span class="required">*</span></label>
                        <input   placeholder="Enter lastname"  
                                  id="user-lastname"
                                  required
                                  name="lastname"
                                  spellcheck="false"
                                  class="form-control"
                                   />
                    </div>

                    <div class="form-group">
                        <label for="user-email">Email<span class="required">*</span></label>
                        <input   placeholder="Enter email"  
                                  id="user-email"
                                  required
                                  name="email"
                                  spellcheck="false"
                                  class="form-control"
                                   />
                    </div>

                    <div class="form-group">
                        <label for="user-password">Password<span class="required">*</span></label>
                        <input   placeholder="Enter password"  
                                  id="user-password"
                                  required
                                  name="password"
                                  spellcheck="false"
                                  class="form-control"
                                   />
                    </div>
                 
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"
                               value="Submit"/>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
            <div class="sidebar-module">
                <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/users"> <i class="fa fa-building-o" aria-hidden="true"></i> All users</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
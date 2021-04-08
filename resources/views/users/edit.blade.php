<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
                <div class="row col-lg-12 col-md-12 col-sm-12" style="background: white; margin: 10px; padding: 15px;">

                    <form method="POST" action="{{ route('users.update')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{$user->id}}}">
                        <!-- <input type="hidden" name="_method" value="PUT"> -->

                        <div class="form-group">
                            <label for="user-name">First name <span class="required">*</span></label>
                            <input  placeholder="Enter first name"  
                                    id="user-firstname"
                                    required
                                    name="firstname"
                                    spellcheck="false"
                                    class="form-control"
                                    value="{{ $user->firstname }}" 
                                    />
                        </div>

                        <div class="form-group">
                            <label for="user-name">Last name <span class="required">*</span></label>
                            <input  placeholder="Enter last name"  
                                    id="user-lastname"
                                    required
                                    name="lastname"
                                    spellcheck="false"
                                    class="form-control"
                                    value="{{ $user->lastname }}" 
                                    />
                        </div>

                        <div class="form-group">
                            <label for="user-email">Email <span class="required">*</span></label>
                            <input  placeholder="Enter email"  
                                    id="user-email"
                                    required
                                    name="email"
                                    spellcheck="false"
                                    class="form-control"
                                    value="{{ $user->email }}"
                                    width="500" 
                                    />
                        </div>

        <!--                 <div class="form-group">
                            <label for="user-adress">Address<span class="required">*</span></label>
                            <input   placeholder="Enter adress"  
                                      id="user-adress"
                                      required
                                      name="adress"
                                      spellcheck="false"
                                      class="form-control"
                                      value="{{ $user->address }}" 
                                       />
                        </div>
                        <div class="form-group">
                            <label for="user-zipcode">Zipcode<span class="required">*</span></label>
                            <input   placeholder="Enter zipcode"  
                                      id="user-zipcode"
                                      required
                                      name="zipcode"
                                      spellcheck="false"
                                      class="form-control"
                                      value="{{ $user->zipcode }}" 
                                       />
                        </div>
                        <div class="form-group">
                            <label for="user-name">City<span class="required">*</span></label>
                            <input   placeholder="Enter name"  
                                      id="user-name"
                                      required
                                      name="city"
                                      spellcheck="false"
                                      class="form-control"
                                      value="{{ $user->city }}" 
                                       />
                        </div>
                        <div class="form-group">
                            <label for="user-phone">Phone<span class="required">*</span></label>
                            <input   placeholder="Enter phone"  
                                      id="user-phone"
                                      required
                                      name="phone"
                                      spellcheck="false"
                                      class="form-control"
                                      value="{{ $user->phone }}" 
                                       />
                        </div> -->

                        <div class="form-group">
                            <label for="user-password">Password <span class="required">*</span></label>
                            <input   placeholder="Enter password"  
                                      id="user-password"
                                      required
                                      name="password"
                                      spellcheck="false"
                                      class="form-control"
                                      value=""
                                      type="password" 
                                       />
                        </div>

                        @if(Auth::check())
                            @if(Auth::user()->role_id == 1)

                                <div class="form-group">
                                    Role
                                    <select name="role_id" value="{{ $user->role_id }}">
                                          <option value="1">ADMIN</option>
                                          <option value="2">USER</option>
                                          <!-- <option value="3">3</option> -->
                                          
                                    </select>
                                </div>
                            @endif
                        @endif

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                                   value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
            
              
            <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
                {{-- <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/users/{{$user->id}}">View user</a></li>
                        <li><a href="/users">All users</a></li>
                    </ol>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
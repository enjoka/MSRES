        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>

                    <li>
                        <a href="/results"><i class="fa fa-book"></i> Results<span class="fa arrow"></span></a>


                    <li>
                        <a href="/candidates"><i class="fa  fa-users"></i> Candidates<span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Parameters<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                {{link_to_action('RegionsController@index',$title='Regions')}}
                            </li>

                            <li>
                                {{link_to_action('DistrictsController@index',$title='Districts')}}
                            </li>

                            <li>
                                {{ link_to_action('CentresController@index',$title='Centres')}}
                            </li>

                            <li>
                                {{ link_to_action('CoursesController@index',$title='Courses')}}
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}"><i class="fa fa-cog"></i> User<span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart"></i> Reports<span class="fa arrow"></span></a>

                    </li>

                    
                </ul>

            </div>
        </div>
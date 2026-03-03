        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rocker</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('admin-dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>

                </li>


                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">State</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('admin-state-create') }}"><i class='bx bx-radio-circle'></i>Add State</a>
                        </li>
                        <li> <a href="{{ route('admin-state-index') }}"><i class='bx bx-radio-circle'></i>All State</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">City</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('admin-city-create') }}"><i class='bx bx-radio-circle'></i>Add City</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Branch</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('admin-branch-create') }}"><i class='bx bx-radio-circle'></i>Add
                                Branch</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>All Branches</a>
                        </li>

                    </ul>
                </li>


            </ul>
            <!--end navigation-->
        </div>

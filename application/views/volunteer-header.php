<nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="<?php echo base_url('VolunteerHomeController/index'); ?>" class="nav-link"> <i class="fa-solid fa-gauge mt-1"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="<?php echo base_url('VolunteerHomeController/appointment'); ?>" class="nav-link"> <i class="fa-regular fa-calendar-check mt-1"></i>
                                <p>
                                    Appointments
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="<?php echo base_url('VolunteerHomeController/d_history'); ?>" class="nav-link"> <i class="fa-solid fa-clock-rotate-left mt-1"></i>
                                <p>
                                    Donation History
                                </p>
                            </a>
                        </li>                                              
                        <li class="nav-item"> <a href="<?php echo base_url('VolunteerHomeController/profile'); ?>" class="nav-link"> <i class="fa-solid fa-user mt-1"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="<?php echo base_url('LoginLogoutController/volunteerLogout'); ?>" class="nav-link"> <i class="fa-solid fa-arrow-right-from-bracket mt-1"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="<?php echo base_url(); ?>" class="nav-link"> <i class="fa-solid fa-rotate-left mt-1"></i>
                                <p>
                                    Return To Website
                                </p>
                            </a>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
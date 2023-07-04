<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Superuser', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                return false;

            }
        });     

          Gate::define('Superuser-administrador-consultor-auditor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 4) {
                        return true;
                    } else {
                        
                        if ($user->role == 6) {
                            return true;
                        } else {
                            
                            return false;
            
                        }
        
        
                    }
    
                }

            }
        });     

        Gate::define('Superuser-administrador-escrutador-consultor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 2) {
                        return true;
                    } else {
                        
                        if ($user->role == 4) {
                            return true;
                        } else {
                            
                            return false;
            
                        }
        
        
                    }
    
                }

            }
        });     

        Gate::define('Superuser-administrador-escrutador-consultor-auditor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 2) {
                        return true;
                    } else {
                        
                        if ($user->role == 4) {
                            return true;
                        } else {
                            
                            if ($user->role == 6) {
                                return true;
                            } else {
                                
                                return false;
                
                            }
            
                        }
        
                    }
    
                }

            }
        });  
             
        Gate::define('Superuser-administrador-escrutador-coordinador-consultor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 2) {
                        return true;
                    } else {
                        
                        if ($user->role == 3) {
                            return true;
                        } else {
                            
                            if ($user->role == 4) {
                                return true;
                            } else {
                                
                                return false;
                
                            }
            
                        }
        
                    }
    
                }

            }
        });     

        Gate::define('Superuser-escrutador-coordinador', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 2) {
                    return true;
                } else {
                    if ($user->role == 3) {
                        return true;
                    } else {
                                                   
                        return false;
                        
                    }
                }

            }
        });     

        Gate::define('Superuser-administrador-escrutador-coordinador-consultor-auditor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 2) {
                        return true;
                    } else {
                        
                        if ($user->role == 3) {
                            return true;
                        } else {
                            
                            if ($user->role == 4) {
                                return true;
                            } else {
                                
                                if ($user->role == 6) {
                                    return true;
                                } else {
                                    
                                    return false;
                    
                                }
                
                            }
            
                        }
        
                    }
    
                }

            }
        });  
        Gate::define('Superuser-administrador-consultor-validador', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 4) {
                        return true;
                    } else {
                        
                        if ($user->role == 5) {
                            return true;
                        } else {                                                                              
                                return false;
                                                  
                        }
        
                    }
    
                }

            }
        }); 

        Gate::define('no-editar', function($user){
            if ($user->role == 4) {
                return false;
            } else {
                    return true;
            }
          });

          Gate::define('Superuser-administrador-auditor', function($user){
            if ($user->id == 1) {
                return true;
            } else {
                if ($user->role == 1) {
                    return true;
                } else {
                    
                    if ($user->role == 6) {
                        return true;
                    } else {
                        
                        return false;
        
                    }
    
                }

            }
        });  
    }
}

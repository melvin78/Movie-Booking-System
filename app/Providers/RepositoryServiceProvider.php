<?php

namespace App\Providers;

use App\Interfaces\CinemaRepositoryInterface;
use App\Interfaces\CinemaServiceInterface;
use App\Interfaces\DrinkRepositoryInterface;
use App\Interfaces\DrinkServiceInterface;
use App\Interfaces\FastFoodRepositoryInterface;
use App\Interfaces\FastFoodServiceInterface;
use App\Interfaces\MovieRepositoryInterface;
use App\Interfaces\MovieServiceInterface;
use App\Interfaces\SeatRepositoryInterface;
use App\Interfaces\SeatServiceInterface;
use App\Interfaces\ShowDatesRepositoryInterface;
use App\Interfaces\ShowTimeRepositoryInterface;
use App\Interfaces\ShowTimeServiceInterface;
use App\Interfaces\SnackRepositoryInterface;
use App\Interfaces\SnackServiceInterface;
use App\Interfaces\TicketRepositoryInterface;
use App\Interfaces\TicketsBoughtRepositoryInterface;
use App\Interfaces\TicketsBoughtServiceInterface;
use App\Interfaces\TicketServiceInterface;
use App\Repository\CinemaRepository;
use App\Repository\DrinkRepository;
use App\Repository\FastFoodRepository;
use App\Repository\MovieRepository;
use App\Repository\SeatRepository;
use App\Repository\ShowDateRepository;
use App\Repository\ShowTimeRepository;
use App\Repository\SnackRepository;
use App\Repository\TicketRepository;
use App\Repository\TicketsBoughtRepository;
use App\Services\CinemaService;
use App\Services\DrinkService;
use App\Services\FastFoodService;
use App\Services\MoviesService;
use App\Services\SeatService;
use App\Services\ShowDateService;
use App\Services\ShowTimeService;
use App\Services\SnacksService;
use App\Services\TicketsBoughtService;
use App\Services\TicketService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //->repositories
        $this->app->bind(TicketRepositoryInterface::class,TicketRepository::class);
        $this->app->bind(CinemaRepositoryInterface::class,CinemaRepository::class);
        $this->app->bind(FastFoodRepositoryInterface::class,FastFoodRepository::class);
        $this->app->bind(MovieRepositoryInterface::class,MovieRepository::class);
        $this->app->bind(ShowTimeRepositoryInterface::class,ShowTimeRepository::class);
        $this->app->bind(SnackRepositoryInterface::class,SnackRepository::class);
        $this->app->bind(DrinkRepositoryInterface::class,DrinkRepository::class);
        $this->app->bind(SeatRepositoryInterface::class,SeatRepository::class);
        $this->app->bind(ShowDatesRepositoryInterface::class,ShowDateRepository::class);
        $this->app->bind(TicketsBoughtRepositoryInterface::class,TicketsBoughtRepository::class);


        //->services
        $this->app->bind(CinemaServiceInterface::class,CinemaService::class);
        $this->app->bind(FastFoodServiceInterface::class,FastFoodService::class);
        $this->app->bind(MovieServiceInterface::class,MoviesService::class);
        $this->app->bind(ShowTimeServiceInterface::class,ShowTimeService::class);
        $this->app->bind(SnackServiceInterface::class,SnacksService::class);
        $this->app->bind(TicketServiceInterface::class,TicketService::class);
        $this->app->bind(DrinkServiceInterface::class,DrinkService::class);
        $this->app->bind(SeatServiceInterface::class,SeatService::class);
        $this->app->bind(ShowDateService::class,ShowDateService::class);
        $this->app->bind(TicketsBoughtServiceInterface::class,TicketsBoughtService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

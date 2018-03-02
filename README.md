# cakupan-puskesmas

[![Join the chat at https://gitter.im/cakupan-puskesmas/Lobby](https://badges.gitter.im/cakupan-puskesmas/Lobby.svg)](https://gitter.im/cakupan-puskesmas/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/cakupan-puskesmas/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/cakupan-puskesmas/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/cakupan-puskesmas/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/cakupan-puskesmas/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/cakupan-puskesmas/v/stable)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)
[![Total Downloads](https://poser.pugx.org/bantenprov/cakupan-puskesmas/downloads)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/cakupan-puskesmas/v/unstable)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)
[![License](https://poser.pugx.org/bantenprov/cakupan-puskesmas/license)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/cakupan-puskesmas/d/monthly)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)
[![Daily Downloads](https://poser.pugx.org/bantenprov/cakupan-puskesmas/d/daily)](https://packagist.org/packages/bantenprov/cakupan-puskesmas)

Cakupan Puskesmas Menurut Kabupaten/Kota

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/cakupan-puskesmas:dev-master
```
- Latest release:

## download via github
```bash
$ git clone https://github.com/bantenprov/cakupan-puskesmas.git
```
#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\CakupanPuskesmas\CakupanPuskesmasServiceProvider::class

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=cakupan-puskesmas-assets
$ php artisan vendor:publish --tag=cakupan-puskesmas-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
    {
        path: '/dashboard',
        components: {
        main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
        title: "Dashboard"
        }
    },
    //== ...
    {
        path: '/dashboard/cakupan-puskesmas',
        components: {
            main: resolve => require(['./components/views/bantenprov/cakupan-puskesmas/DashboardCakupanPuskesmas.vue'], resolve),
            navbar: resolve => require(['./components/Navbar.vue'], resolve),
            sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
            title: "Cakupan Puskesmas"
        }
    }
    //== ...
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
    //== ...
    {
        path: '/admin/dashboard/cakupan-puskesmas',
        components: {
          main: resolve => require(['./components/bantenprov/cakupan-puskesmas/CakupanPuskesmasAdmin.view.vue'], resolve),
          navbar: resolve => require(['./components/Navbar.vue'], resolve),
          sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
          title: "Cakupan Puskesmas"
        }
    }
    //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Cakupan Puskesmas',
          link: '/dashboard/cakupan-puskesmas',
          icon: 'fa fa-angle-double-right'
        },
  ]
},
{
  name: 'Admin',
  icon: 'fa fa-lock',
  childType: 'collapse',
  childItem: [
    {
      name: 'Dashboard',
      icon: 'fa fa-angle-double-right',
      child: [
        {
          name: 'Home',
          link: '/admin/dashboard/home',
          icon: 'fa fa-angle-right'
        },
        //== ...
        {
          name: 'Cakupan Puskesmas',
          link: '/admin/dashboard/cakupan-puskesmas',
          icon: 'fa fa-angle-double-right'
        }
      ]
    },
  ]
}
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== Cakupan Puskesmas
import CakupanPuskesmas from './components/bantenprov/cakupan-puskesmas/CakupanPuskesmas.chart.vue';
Vue.component('echarts-cakupan-puskesmas', CakupanPuskesmas);

import CakupanPuskesmasKota from './components/bantenprov/cakupan-puskesmas/CakupanPuskesmasKota.chart.vue';
Vue.component('echarts-cakupan-puskesmas-kota', CakupanPuskesmasKota);

import CakupanPuskesmasTahun from './components/bantenprov/cakupan-puskesmas/CakupanPuskesmasTahun.chart.vue';
Vue.component('echarts-cakupan-puskesmas-tahun', CakupanPuskesmasTahun);

import CakupanPuskesmasAdminShow from './components/bantenprov/cakupan-puskesmas/CakupanPuskesmasAdmin.view.vue';
Vue.component('admin-view-cakupan-puskesmas-tahun', CakupanPuskesmasAdminShow);

import CakupanPuskesmasBar01 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasBar01.vue';
Vue.component('cakupan-puskesmas-bar-01', CakupanPuskesmasBar01);

import CakupanPuskesmasBar02 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasBar02.vue';
Vue.component('cakupan-puskesmas-bar-02', CakupanPuskesmasBar02);

//== mini bar charts
import CakupanPuskesmasBar03 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasBar03.vue';
Vue.component('cakupan-puskesmas-bar-03', CakupanPuskesmasBar03);

import CakupanPuskesmasPie01 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasPie01.vue';
Vue.component('cakupan-puskesmas-pie-01', CakupanPuskesmasPie01);

import CakupanPuskesmasPie02 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasPie02.vue';
Vue.component('cakupan-puskesmas-pie-02', CakupanPuskesmasPie02);

//== mini pie charts
import CakupanPuskesmasPie03 from './components/views/bantenprov/cakupan-puskesmas/CakupanPuskesmasPie03.vue';
Vue.component('cakupan-puskesmas-pie-03', CakupanPuskesmasPie03);
```
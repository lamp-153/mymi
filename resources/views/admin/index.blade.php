@extends('admin.base.base')
@section('title','小米后台 - 管理首页')
@section('content')
	<!-- Statistics Button Container -->
	<div class="mws-stat-container clearfix">
    	
        <!-- Statistic Item-->
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-building"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Floors Climbed</span>
                <span class="mws-stat-value">324</span>
            </span>
        </a>

    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-sport"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Calories Burned</span>
                <span class="mws-stat-value down">74%</span>
            </span>
        </a>

    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-walk"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Kilometers Walked</span>
                <span class="mws-stat-value">14</span>
            </span>
        </a>
        
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-bug"></span>
            
            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Bugs Fixed</span>
                <span class="mws-stat-value up">22%</span>
            </span>
        </a>
        
    	<a class="mws-stat" href="#">
        	<!-- Statistic Icon (edit to change icon) -->
        	<span class="mws-stat-icon icol32-car"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
            	<span class="mws-stat-title">Cars Repaired</span>
                <span class="mws-stat-value">77</span>
            </span>
        </a>
    </div>
    
    <!-- Panels Start -->
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-home"></i> 首页</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr style='height:60px;font-size:30px'>
                        <th>系统信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style='height:50px;font-size:20px;'>
                        <td><i class="icol32-monitor"></i>　操作系统：windows</td>
                    </tr>
                    <tr style='height:50px;font-size:20px;'>
                        <td><i class="icol32-monitor"></i>　运行环境：</td>
                    </tr>
                    <tr style='height:50px;font-size:20px;'>
                        <td><i class="icol32-monitor"></i>　当前版本：</td>
                    </tr>
                    <tr style='height:50px;font-size:20px;'>
                        <td><i class="icol32-monitor"></i>　上传限制</td>
                    </tr>
                    <tr style='height:50px;font-size:20px;'>
                        <td><i class="icol32-monitor"></i>　当前时间</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                
    
@endsection                       
            
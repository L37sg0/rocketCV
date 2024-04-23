<?php

namespace App\Http\Controllers;

use App\Helper\Config;

class FrontController extends Controller
{
    private string $websiteName;
    private string $websiteTitle;

    public function __construct(
        private readonly Config $config,
    ) {
        $this->websiteName = $this->config->getWebsiteName();
        $this->websiteTitle = $this->config->getWebsiteTitle();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $websiteName = $this->websiteName;
        $websiteTitle = $this->websiteTitle;
        return view($this->config->getActiveTheme() . '.index', compact('websiteName', 'websiteTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $websiteName = $this->websiteName;
        $websiteTitle = $this->websiteTitle;
        return view($this->config->getActiveTheme() . '.create', compact('websiteName', 'websiteTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $websiteName = $this->websiteName;
        $websiteTitle = $this->websiteTitle;
        return view($this->config->getActiveTheme() . '.edit', compact('websiteName', 'websiteTitle'));
    }
}

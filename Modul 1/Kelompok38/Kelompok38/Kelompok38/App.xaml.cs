using System;
using System.Collections.Generic;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;
using Kelompok38.View;

[assembly: XamlCompilation(XamlCompilationOptions.Compile)]
namespace Kelompok38
{
    public partial class App : Application
    {
        public static bool IsUserLoggedIn { get; internal set; }

        public App()
        {
            InitializeComponent();
            if (!IsUserLoggedIn)
            {
                MainPage = new NavigationPage(new LoginPage());
            }
            else
            {
                MainPage = new NavigationPage(new HalamanUtama());
            }
        }

        protected override void OnStart()
        {
            // Handle when your app starts
        }

        protected override void OnSleep()
        {
            // Handle when your app sleeps
        }

        protected override void OnResume()
        {
            // Handle when your app resumes
        }
    }
}

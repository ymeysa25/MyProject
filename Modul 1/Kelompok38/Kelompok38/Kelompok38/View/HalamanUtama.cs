using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Kelompok38.Model;
using Kelompok38.View;
using Xamarin.Forms;

namespace Kelompok38.View
{
    public class HalamanUtama : ContentPage
    {
        public HalamanUtama()
        {
            this.Title = "Data Mahasiswa";

            StackLayout stacklayout = new StackLayout();
            Button button = new Button();
            button.Text = "Tambah Data";
            button.Clicked += Button_Tambah_Clicked;
            stacklayout.Children.Add(button);

            button = new Button();
            button.Text = "Lihat Data";
            button.Clicked += Button_Lihat_Clicked;
            stacklayout.Children.Add(button);

            button = new Button();
            button.Text = "Edit Data";
            button.Clicked += Button_Edit_Clicked;
            stacklayout.Children.Add(button);

            button = new Button();
            button.Text = "Hapus Data";
            button.Clicked += Button_Hapus_Clicked;
            stacklayout.Children.Add(button);

            Content = stacklayout;
        }

        //method ketika klik button tambah 
        private async void Button_Tambah_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new HalamanTambahData());
        }

        //method ketika klik lihat data
        private async void Button_Lihat_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new HalamanEditData());
        }

        //method ketika edit data
        private async void Button_Edit_Clicked(object sender, EventArgs e)
        {
           await Navigation.PushAsync(new HalamanEditData());
        }

        //method ketika hapus data
        private async void Button_Hapus_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new HalamanHapusData());
        }
    }

}
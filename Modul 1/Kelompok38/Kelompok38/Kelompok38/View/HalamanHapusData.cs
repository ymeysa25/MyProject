using Kelompok38.Model;
using SQLite;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;

using Xamarin.Forms;

namespace Kelompok38.View
{
    public class HalamanHapusData : ContentPage
    {

        private ListView _listView;
        private Button _button;

        DataMahasiswa _data = new DataMahasiswa();

        string _dbPath = Path.Combine(System.Environment.GetFolderPath(System.Environment.SpecialFolder.Personal), "myDB.db4");

        public HalamanHapusData()
        {
            this.Title = "Hapus Data Mahasiswa";

            var db = new SQLiteConnection(_dbPath);

            StackLayout stackLayout = new StackLayout();

            _listView = new ListView();
            _listView.ItemsSource = db.Table<DataMahasiswa>().OrderBy(x => x.Nama).ToList();
            _listView.ItemSelected += _listView_ItemSelected;
            stackLayout.Children.Add(_listView);
            Content = stackLayout;

            _button = new Button();
            _button.Text = "Hapus";
            _button.Clicked += _button_Clicked;
            stackLayout.Children.Add(_button);
        }
        private void _listView_ItemSelected(object sender, SelectedItemChangedEventArgs e)
        {
            _data = (DataMahasiswa)e.SelectedItem;


        }
        private async void _button_Clicked(object sender, EventArgs e)
        {
            var db = new SQLiteConnection(_dbPath);
            db.Table<DataMahasiswa>().Delete(x => x.Id == _data.Id);
            await Navigation.PopAsync();


        }
    }
}
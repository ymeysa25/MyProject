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
    public class HalamanEditData : ContentPage
    {
        private ListView _listView;
        private Entry _idEntry;
        private Entry _namaEntry;
        private Entry _jurusanEntry;
        private Button _button;

        DataMahasiswa _data = new DataMahasiswa();

        string _dbPath = Path.Combine(System.Environment.GetFolderPath(System.Environment.SpecialFolder.Personal), "myDB.db4");

        public HalamanEditData()
        {
            this.Title = "Edit Data Mahasiswa";

            var db = new SQLiteConnection(_dbPath);

            StackLayout stackLayout = new StackLayout();

            _listView = new ListView();
            _listView.ItemsSource = db.Table<DataMahasiswa>().OrderBy(x => x.Nama).ToList();
            _listView.ItemSelected += _listView_ItemSelected;
            stackLayout.Children.Add(_listView);

            _idEntry = new Entry();
            _idEntry.Placeholder = "ID";
            _idEntry.IsVisible = false;
            stackLayout.Children.Add(_idEntry);

            _namaEntry = new Entry();
            _namaEntry.Keyboard = Keyboard.Text;
            _namaEntry.Placeholder = "Nama Anda";
            stackLayout.Children.Add(_namaEntry);

            _jurusanEntry = new Entry();
            _jurusanEntry.Keyboard = Keyboard.Text;
            _jurusanEntry.Placeholder = "Jurusan";
            stackLayout.Children.Add(_jurusanEntry);

            _button = new Button();
            _button.Text = "Edit";
            _button.Clicked += _button_Clicked;
            stackLayout.Children.Add(_button);

            Content = stackLayout;
        }

        private async void _button_Clicked(object sender, EventArgs e)
        {
            var db = new SQLiteConnection(_dbPath);
            DataMahasiswa data = new DataMahasiswa()
            {
                Id = Convert.ToInt32(_idEntry.Text),
                Nama = _namaEntry.Text,
                Jurusan = _jurusanEntry.Text
            };
            db.Update(data);
            await Navigation.PopAsync();


        }
        private void _listView_ItemSelected(object sender, SelectedItemChangedEventArgs e)
        {
            _data = (DataMahasiswa)e.SelectedItem;
            _idEntry.Text = _data.Id.ToString();
            _namaEntry.Text = _data.Nama;
            _jurusanEntry.Text = _data.Jurusan;

        }
    }
}
package com.blogspot.mad51programming.spinnerduty;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class SpinnerActivity extends AppCompatActivity {
    String nama[] = {"satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh",
            "sebelas","duabelas","tigabelas","empatbelas","limabelas","enambels","tujuhbels"};
    int gambar[] = {R.drawable.acp_program,R.drawable.asembly_2,R.drawable.asrama1,R.drawable.baris,R.drawable.dzikir,
            R.drawable.dzikir2,R.drawable.futsal, R.drawable.kamar_mandi,R.drawable.kamar_mandi_dalam,R.drawable.kamar_mandi_depan,
            R.drawable.karate,R.drawable.kelas,R.drawable.lapangan,R.drawable.masjid,R.drawable.masuk_kelas,R.drawable.plang,
            R.drawable.tower_internet};
    int gambar_terpilih;
    Spinner spinner;
    ImageView imag;
    TextView name;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_spinner);
        spinner = (Spinner) findViewById(R.id.spinner);
        imag =(ImageView) findViewById(R.id.img);
        name =(TextView) findViewById(R.id.name);
        ArrayAdapter adapter= new ArrayAdapter(getApplicationContext(),android.R.layout.simple_spinner_item,nama);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);
        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int position, long l) {
                gambar_terpilih=position;
                name.setText(nama[position]);
                imag.setImageResource(gambar[position]);
                pesan(nama[position]);
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });

    }

    private void pesan(String isipesan) {
        Toast.makeText(this, isipesan, Toast.LENGTH_SHORT).show();
    }
}

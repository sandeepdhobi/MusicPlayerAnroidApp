package com.example.sandeep.mp;

import android.content.Intent;
import android.os.Environment;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.io.File;
import java.util.ArrayList;


public class MainActivity extends ActionBarActivity {
    ListView lv;
    String[] items;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main
        );
        lv=(ListView)findViewById(R.id.lvPlaylist);

        final ArrayList<File> mysongs=findSongs(Environment.getExternalStorageDirectory());
        items=new String[ mysongs.size() ] ;
        for (int i=0;i<mysongs.size();i++)
        {
            items[i]=mysongs.get(i).getName().toString().replace(".mp3","").replace(".wav","");

        }

        ArrayAdapter<String> adp=new ArrayAdapter<String>(getApplicationContext(),R.layout.song_layout,R.id.textView,items);
        lv.setAdapter(adp);

        lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id)
            {
              startActivity(new Intent(getApplicationContext(),Player.class).putExtra("pos",position).putExtra("songlist",mysongs));
            }
        });

    }

    public ArrayList<File> findSongs(File root)
    {
        ArrayList<File> a1=new ArrayList<File>();
        File[] files=root.listFiles();
        for (File singleFile : files)
        {
            if (singleFile.isDirectory()&&!singleFile.isHidden())
            {
                a1.addAll(findSongs(singleFile));
            }
            else
            {
                if (singleFile.getName().endsWith(".mp3"))
                {
                    a1.add(singleFile);
                }
            }
        }
        return a1;
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}

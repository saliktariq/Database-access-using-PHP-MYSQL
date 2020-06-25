<?php
$sql['active_artist_list'] = 'select artist.name, count(song.id) as noOfSongs from artist inner join song on (artist.id = song.artist_id) where (song.id <> 0) group by artist.name';
$sql['total_active_artists'] = 'select count(distinct artist.id) as noOfArtists from artist left join song on (artist.id = song.artist_id) where (song.duration > 0)';
$sql['songs_list'] = 'select song.title, artist.name, song.duration from artist join song on (artist.id = song.artist_id) order by artist.name,song.title ASC';
$sql['total_songs'] = 'select count(*) as totalSongs from song';
?>
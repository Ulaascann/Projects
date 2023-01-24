import React from 'react';

function Anasayfa(props) {
  return (
    <div>
      <h1>Burası Anasayfadır.</h1>
      <h2>Kullanıcı Adı: {props.name}</h2>
      <hr />
      <h2>Kullanıcı Soyadı: {props.surname}</h2>
      <hr />
      <h2>Kullanıcı Yaşı: {props.age}</h2>
      <hr />
      <h2>Kullanıcı username: {props.username}</h2>
      <hr />
    </div>
  );
}

export default Anasayfa;

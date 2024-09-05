import mysql.connector

conn = mysql.connector.connect(
    host="presensikuliah.uny.ac.id",
    user="elaporan",
    password="UNYregtik54321",
    database="presensikuliah"
)

if conn.is_connected():
    print("Berhasil terhubung ke database")
else:
    print("Koneksi gagal")

# Menutup koneksi
conn.close()

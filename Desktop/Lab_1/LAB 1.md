# LAB 1

Upoznali smo se s osnovnim sigurnosnim prijetnjama i ranjivostima u računalnim mrežama. Analizirali smo ranjivost Address Resolution Protocol-a (ARP) koja napadaču omogućava izvođenje man in the middle i denial of service napada na računala koja dijele zajedničku lokalnu mrežu (LAN).

![Screenshot (143).png](LAB%201%201a5ed37dea764724b8a7349c01f94f1f/Screenshot_(143).png)

Nakon što smo ustanovili da su na istoj lokalnoj mreži(tako što smo pronašli MAC adrese), uspostavili smo komunikaciju između station-1 i station-2.

station-2 netcat -l -p 8080

station-1 netcat station-2 8080

![Screenshot (147).png](LAB%201%201a5ed37dea764724b8a7349c01f94f1f/Screenshot_(147).png)

Zatim želimo da evil-station može presresti poruku, odnosno vidjeti njen sadržaj. 

arpspoof [-t target][-r] host

U našem slučaju je target station-1, a host station-2.

![Screenshot (149).png](LAB%201%201a5ed37dea764724b8a7349c01f94f1f/Screenshot_(149).png)

![Screenshot (150).png](LAB%201%201a5ed37dea764724b8a7349c01f94f1f/Screenshot_(150).png)

Objašnjenje slike iz uputa za lab1(zašto piše IP od evil-station, a ne IP od station-1 ili station-2)

Za kraj smo pokušali station-2 isključiti iz komunikacije. Odnosno vidjeti sve što station-2 šalje station-1, a ono što station-1 šalje vidi samo evil-station.

tcpdump-X host station-1 and not arp

echo 0> /proc/sys/net/ipv4/ip_forwardot@

OVO JE PRIMJER AKTIVNOG NAPADA

Sara Ćurak

računarstvo 120
## LEO1 Portfolio 2
# Container creation and basic setup:
Both C1 and C2 were created with:
`lxc-create -n C1 -t download -- -d alpine -r 3.4 -a armhf`

They were then given a static IP by editing their respective /etc/network/interfaces to contain the following:
``
    iface eth0 inet static
      address 10.0.3.11
      netmask 255.255.255.0
``

# Lighttpd setup in C1:
Lighttpd was installed and configured according to the portfolio description on Google Drive.
The containers port 80 (http) is made accesible on the Pi's port 80 (only via connection on usb0), with the following command:
`iptables -t nat -A PREROUTING -i usb0 -p tcp --dport 80 -j DNAT --to-destination 10.0.3.11:80`

# Random script in C2:
The script rng.sh (see the uploaded files in this repository) is served on port 8080 with socat:
`socat -v -v tcp-listen:8080,fork,reuseaddr exec:/bin/rng.sh`

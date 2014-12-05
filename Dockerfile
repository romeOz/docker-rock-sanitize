FROM ubuntu:trusty
MAINTAINER romeOz <serggalka@gmail.com>

RUN	\
	# Update packages list, upgrade installed packages
	apt-get -y update && \
	apt-get -y upgrade && \
	apt-get install -y software-properties-common

RUN \
	# Add repositories
	apt-add-repository -y ppa:ansible/ansible  && \
	apt-get -y update

# Install ansible
RUN apt-get install -y ansible 

# Add playbooks to the Docker image
ADD ./ /var/tmp/
WORKDIR /var/tmp/

# Install ansible-playbook
RUN ansible-playbook -v provisioning/docker.yml --inventory-file=provisioning/hosts -c local

# Install supervisor
RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor

ADD ./provisioning/supervisord.conf /etc/supervisor/conf.d/

EXPOSE 22 80

CMD ["/usr/bin/supervisord"]
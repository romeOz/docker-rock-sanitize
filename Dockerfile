FROM ubuntu:trusty
MAINTAINER romeOz <serggalka@gmail.com>

RUN	\
	# Update packages list, upgrade installed packages
	apt-get -y update && \
	apt-get -y upgrade && \
	apt-get install -y software-properties-common && \
    # Add repositories
    apt-add-repository -y ppa:ansible/ansible  && \
    apt-get -y update && \
	# Install ansible
	apt-get install -y ansible

# Add playbooks to the Docker image
ADD ./ /var/www/rock-sanitize/
WORKDIR /var/www/rock-sanitize/

# Install ansible-playbook
RUN ansible-playbook -v provisioning/docker.yml -i 'docker,' -c local

# Install supervisor
RUN apt-get install -y supervisor && mkdir -p /var/log/supervisory

ADD ./provisioning/supervisord.conf /etc/supervisor/conf.d/

EXPOSE 22 80

CMD ["/usr/bin/supervisord"]
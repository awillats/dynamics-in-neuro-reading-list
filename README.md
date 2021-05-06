# **Dynamical Systems (in Neuro) Reading List**

<img src="https://github.com/awillats/Dynamics_In_Neuro_Lectures_2021/blob/main/imgs/dyn_brain_loop.png" width="400">

# Scope:

### This reading list is mostly centered around the practical application of linear dynamical systems models to predict neural data.

### I’ve marked papers I find to be especially useful with \[++\] or \[+\]

### see the collapsible version of this list here: [\[collapsible outline\]](https://workflowy.com/s/dynamical-systems-in/WntWnBHaHsS9lwM4)

# Table of Contents:
* [Shortlist](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#shortlist----i-only-have-time-to-read-5-papers)
* [Overviews](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#high-level---overviews-reviews-tutorials)
* [Model types](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#state-space-dynamical-systems-model-types-commonly-used-in-neuro)
    - [(P)LDS](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#linear-dynamical-systems-lds)
    - [HMM](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#hidden-markov-models-hmm)
* [State estimations](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#latent-state-estimation-in-neuro)
* [System identification](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#system-identification---fitting-lds-models)
* [Software tools](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#software-tools-for-dynamical-systems)
* [Control](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#resources-for-understanding-dynamical-systems-in-control)
* [Stimulus optimization](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#experimental-design--model-based-stimulus-optimization)
* [Misc.](https://github.com/awillats/dynamics-in-neuro-reading-list/blob/main/README.md#other-reference-lists)

# **Shortlist** - " I only have time to read 5 papers"

### \[++\] "[A new look at state-space models for neural data](https://link.springer.com/article/10.1007/s10827-009-0179-x)" (2010) Paninski et al.

### \[++\] "[Empirical](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[models](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[of spiking in neural populations](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)" (2011) Macke et al.

### \[++\] "[Selective modulation of cortical state during spatial attention](https://science.sciencemag.org/content/354/6316/1140)" (2016) Engel et al.

- [\[Supplement\]](https://science.sciencemag.org/content/sci/suppl/2016/12/01/354.6316.1140.DC1/Engel-SM.pdf) contains excellent methods details, including comparison of HMM to GPFA, and measuring performance as a function of number of discrete states

### \[++\] "[Dynamic Analysis of Neural Encoding by Point Process Adaptive Filtering](https://pubmed.ncbi.nlm.nih.gov/15070506/)" (2004) Eden et al.

### \[+\] "[Multiscale modeling and decoding algorithms for spike-field activity](https://pubmed.ncbi.nlm.nih.gov/30523833/)" Hsieh … Shanechi

### [ldsCtrlEst:](https://github.com/lindermanlab/ssm) dynamical system estimation & control library - Stanley Rozell labs:[\[docs\]](https://stanley-rozell.github.io/lds-ctrl-est/) [\[code\]](https://github.com/stanley-rozell/lds-ctrl-est)

- primarily focused on implementing dynamical systems within systems neuroscience experiments

# **High Level - Overviews, Reviews, Tutorials**

### \[++\] "[A new look at state-space models for neural data](https://link.springer.com/article/10.1007/s10827-009-0179-x)" (2010) Paninski et al.

### "[State-Space Models for the Analysis of Neural Spike Train and Behavioral Data](https://link.springer.com/referenceworkentry/10.1007%2F978-1-4614-7320-6_410-1)" (2016) Chen & Brown

- see also: SSPPF - a kalman filter for point-process / spiking

    - \[++\] "[Dynamic Analysis of Neural Encoding by Point Process Adaptive Filtering](https://pubmed.ncbi.nlm.nih.gov/15070506/)" (2004) Eden et al.

    - "[Estimating a state-space model from point process observations](https://pubmed.ncbi.nlm.nih.gov/12803953/)" (2003) Smith, Brown

### \[+\] "[State-Space Models](State%20space%20model)" (2013) scholarpedia page by Chen & Brown

- discusses model variants, fitting, applications

- has lots of great references

### [Tutorial: Statistical models for neural data](https://youtu.be/NFeGW5ljUoI) - Jonathan Pillow \[[part 1](https://youtu.be/NFeGW5ljUoI)\] \[[part 2](https://youtu.be/rItGnzSHLcQ)\] \[[slides](https://pillowlab.princeton.edu/pubs/pillow_TutorialSlides_Cosyne2018.pdf)\] \[[code](https://github.com/pillowlab/GLMspiketraintutorial)\]

### "[STATS320: Machine Learning Methods for Neural Data Analysis](https://github.com/slinderman/stats320)" course by Scott Linderman

- includes code labs:

    - [A simple spike sorting algorithm](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_1_Spike_Sorting.ipynb)

    - [Kilosort: Spike sorting by Deconvolution](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_2_Spike_Sorting_with_Deconvolution.ipynb) 

    - [CNMF: Calcium deconvolution via constrained NMF](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_3_Calcium_demixing_and_deconvolution.ipynb)

    - [DeepLabCut: Markerless pose tracking with CNNs](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_4_Markerless_pose_tracking.ipynb)

    - [DeepRetina: Deep encoding models of retinal spike trains](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_5_Encoding_models_of_retinal_ganglion_cells.ipynb)

    - [Kalman Smoothers: Decoding movement from neural data](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_6_Decoding_movement_from_motor_cortex_recordings.ipynb)

    - [MoSeq: Autoregressive HMMs for animal movements](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_7_Autoregressive_Hidden_Markov_Models_of_Behavior.ipynb) 

    - [SLDS: Switching LDS model of neural data](https://colab.research.google.com/github/slinderman/stats320/blob/main/labs/Lab_8_Latent_Variable_Models,_Variational_EM,_and_Worm_Brains.ipynb)

### "[Math Tools for Neuroscience](https://github.com/ebatty/MathToolsforNeuroscience)" - Ella Batty

- video lectures & code tutorials

- great visual explanations

- see especially: Intro to dynamical systems

### "[Introduction to Dynamical Systems](https://youtu.be/bf1264iFr-w)" lecture by Stephen Boyd

### additional tutorials on dynamical systems (unvetted)

- [Tutorial on Dynamical System](https://cs.brown.edu/research/ai/dynamics/tutorial/Documents/LearningDynamicalSystems.html)s by Dean, Leach, Shatkay @ Brown University

- [Dynamical Systems Tutorial](https://www.ini.rub.de/upload/file/1470703075_a4643fac24cb4e73582b/03_Dynamical_systems_tutorial.pdf) by Gregor Schöner

# **State-space, dynamical systems model types** commonly used in neuro

### Note: Most of these approaches fall under the umbrella of “state space models” (SSM)

- (see high-level section)

- This list was assisted / inspired by tables I saw at COSYNE, I believe from [Adam Calhoun](https://twitter.com/neuroecology?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor) and [Memming Park](https://twitter.com/memming)

### Gaussian Process Factor Analysis **(GPFA)**

- primarily used for dimensionality reduction

- \[++\] "[Gaussian-process factor analysis for low-dimensional single-trial analysis of neural population activity](https://journals.physiology.org/doi/full/10.1152/jn.90941.2008)" (2009) Yu et al.

- "[Temporal alignment and latent Gaussian process factor inference in population spike trains](https://www.biorxiv.org/content/10.1101/331751v1.full.pdf)" Duncker & Sahani

- [“Tutorial: GPFA (Gaussian Process Factor Analysis)”](https://elephant.readthedocs.io/en/latest/tutorials/gpfa.html)

### Hidden Markov Models **(HMM)**

- \[++\] "[Hidden Markov Models for the Stimulus-Response Relationships of Multistate Neural Systems](https://direct.mit.edu/neco/article/23/5/1071/7663/Hidden-Markov-Models-for-the-Stimulus-Response)" Escola et al.

    - extensive, tutorial style paper

- \[++\] "[Selective modulation of cortical state during spatial attention](https://science.sciencemag.org/content/354/6316/1140)" (2016) Engel et al.

    - [\[Supplement\]](https://science.sciencemag.org/content/sci/suppl/2016/12/01/354.6316.1140.DC1/Engel-SM.pdf) contains excellent methods details, including comparison of HMM to GPFA, and measuring performance as a function of number of discrete states

- "[Lecture 12: EM and Hidden Markov Models](https://github.com/slinderman/stats320/blob/main/lectures/lecture12.pdf)" - Linderman

    - from Machine Learning Methods for Neural Data Analysis

    - also covers Gaussian (obsv.) HMM

- HMM + guassian observation **(GaussianHMM)**

    - matlab [\[code\]](https://github.com/qiuqiangkong/matlab-hmm) +[\[notes\]](https://github.com/qiuqiangkong/matlab-hmm/blob/master/A%20tutorial%20of%20HMM%202015.12.06.pdf) (covers HMM, gHMM, GMM-HMM) - by Qiuqiang Kong

    - HMM + mixture of gaussian observations **(GMM-HMM)**

        - "[HMM & gaussian mixture models](https://www.inf.ed.ac.uk/teaching/courses/asr/2016-17/asr03-hmmgmm-handout.pdf)" lecture notes by Shimodaira & Renals

### linear dynamical systems **(LDS)**

- Gaussian observations **(GLDS)**

- Poisson observations **(PLDS)**

    - \[++\] "[Empirical](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[models](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)[of spiking in neural populations](https://papers.nips.cc/paper/2011/file/7143d7fbadfa4693b9eec507d9d37443-Paper.pdf)" (2011) Macke et al.

    - fitting toolbox:

        - [pop\_spike\_dyn:](https://bitbucket.org/mackelab/pop_spike_dyn/src/master/)This repository contains different methods for linear dynamical system models with Poisson observations.

            - example script: [PLDSExample.m](https://bitbucket.org/mackelab/pop_spike_dyn/src/master/examples/PLDSExample.m)

- generalized count **(GC LDS)** and nonlinear function **(fLDS)**

    - [“High-dimensional neural spike train analysis with generalized count linear dynamical systems”](https://stat.columbia.edu/~cunningham/pdf/GaoNIPS2015.pdf) (2015) Gao et al.

    - "[Linear dynamical neural population models through nonlinear embeddings](https://arxiv.org/pdf/1605.08454.pdf)" (2016) Gao et al.

- Switched dynamical systems **(SLDS)** - switches between multiple LDS models to capture distinct regimes of dynamical behavior

    - \[+\] "[Dynamical segmentation of single trials from population neural data](https://proceedings.neurips.cc/paper/2011/file/2d6cc4b2d139a53512fb8cbb3086ae2e-Paper.pdf)" Petreska et al.

    - Recurrent SLDS **(rSLDS)**

        - “The recurrent SLDS introduces an additional dependency between the discrete and continuous latent states, allowing the discrete state probability to depend upon the previous continuous state” - Linderman

        - \[++\] "[Recurrent switching linear dynamical systems](https://arxiv.org/pdf/1610.08466.pdf)" Linderman et al.

        - "[Recurrent Switching Linear Dynamical Systems for Neural and Behavioral Analysis](https://youtu.be/6E99BByFvtU)" talk by Linderman

### nonlinear / nonparametric / variational approaches **(vLGP, LFADS)**

- variational latent gaussian process **(vLGP)**

    - "[Variational Latent Gaussian Process for Recovering Single-Trial Dynamics from Population Spike Trains](https://arxiv.org/pdf/1604.03053.pdf) " (2017) Zhao & Park [\[code\]](https://github.com/catniplab/vlgp)

    - [“Variational Online Learning of Neural Dynamics”](https://www.frontiersin.org/articles/10.3389/fncom.2020.00071/full) Zhao & Park [\[paper\]](https://www.frontiersin.org/articles/10.3389/fncom.2020.00071/full)\[[code\]](https://github.com/catniplab/vjf)

- Variational Inference for Nonlinear Dynamics **(VIND)**

    - "[Black](https://arxiv.org/abs/1511.07367)[](https://arxiv.org/abs/1511.07367)[box](https://arxiv.org/abs/1511.07367)[variational inference for state space models](https://arxiv.org/abs/1511.07367)" (2015) Archer et al.

    - "[A Novel Variational Family for Hidden Nonlinear Markov Models](https://openreview.net/forum?id=SJMO2iCct7)" (2018) Hernandez et al.

- Latent Factor Analysis via Dynamical Systems **(LFADS)**

    - \[++\] "[LFADS - Latent Factor Analysis via Dynamical Systems](https://arxiv.org/abs/1608.06315)" Sussillo et al. [\[code & documentation\]](https://lfads.github.io/lfads-run-manager/)

        - "[Inferring single-trial neural population dynamics using sequential auto-encoders](https://www.nature.com/articles/s41592-018-0109-9)" Pandarinath et al.

- See also: Recurrent Neural Networks **(RNN)**

    - "[Recurrent Neural Networks](https://docs.google.com/presentation/d/1HNpeTMkvUsBZubTg0YIa9kBxM2uJ5Iprii4HxZJh5g0/edit?usp=sharing)" Lecture slides & references by [Adam Willats](https://github.com/awillats/Dynamics_In_Neuro_Lectures_2021)

# (Latent-state) **estimation** in neuro

### see also: SSPPF - a kalman filter for point-process / spiking

- \[++\] "[Dynamic Analysis of Neural Encoding by Point Process Adaptive Filtering](https://pubmed.ncbi.nlm.nih.gov/15070506/)" (2004) Eden et al.

- "[Estimating a state-space model from point process observations](https://pubmed.ncbi.nlm.nih.gov/12803953/)" (2003) Smith, Brown

### estimation from spikes + local field potentials (LFP)

- \[+\] "[Multiscale modeling and decoding algorithms for spike-field activity](https://pubmed.ncbi.nlm.nih.gov/30523833/)" Hsieh … Shanechi

# **System identification** - fitting LDS models:

### overviews:

- “System Identification” Lennary Ljung - canonical text on system ID, author is the architect of MATLAB’s sys ID toolbox

    - "[Nonlinear System Identification: A User-Oriented Roadmap](https://arxiv.org/pdf/1902.00683.pdf)" Schoukens & Ljung

    - "[Perspectives on System Identification](https://www.sciencedirect.com/science/article/pii/S1474667016400984)" Ljung

- Overview by S.Brunton - "[Data-Driven Control: Linear System Identification](https://www.youtube.com/watch?v=6F2YVsT9dOs&list=PLMrJAkhIeNNQkv98vuPjO2X2qJO_UPeWR&index=3&ab_channel=SteveBrunton)"

- Lecture notes by K.Pelckmans "[System Identification](https://www.it.uu.se/edu/course/homepage/systemid/vt13/Sysid_s2013_1.pdf)"

- "[Subspace Identification for Linear Systems](v)" (1996) Van Overschee & De Moor

- "[System Identification Methods](https://youtu.be/YiJRgKJ0My8)" by Brian Douglas, a practical, control-focused overview in easy-to-understand terms

    - see also "[Modeling Physical Systems, An Overview](https://youtu.be/580A8gNFOdk)"

- ["System Identification - Data-Driven Modelling of Dynamic Systems](http://www.pvandenhof.nl/5smb0-system-identification-data-driven-modeling/)" - Paul Van den Hof

    - extensive, discusses the challenges of [identificaiton in closed-loop](Closed-loop%20identification)

    - course page: [\[link\]](http://www.pvandenhof.nl/5smb0-system-identification-data-driven-modeling/)

        - includes lectures & exercises

    - lecture notes: [\[link\]](http://www.publications.pvandenhof.nl/5SMB0/ManuscrSysid_Febr2020.pdf)

### application in neuro:

- "[Estimating state and parameters in state space models of spike trains](https://books.google.com/books?hl=en&lr=&id=1Z2NCgAAQBAJ&oi=fnd&pg=PA137&dq=info:Vk13wLtuAuwJ:scholar.google.com&ots=mEpNFjdcd9&sig=t__tJD-FAdvvCD2DxdmXBUCbLvo#v=onepage&q&f=false)" Macke, Buesing, Sahani

    - chapter in “Advanced State-Space Methods for Neural and Clinical Data”

    - Subspace-ID for GLDS

    - Subspace-ID for PLDS

- "[Spectral learning of linear dynamics from generalised-linear observations with application to neural population data](https://pure.mpg.de/rest/items/item_2346638/component/file_2346637/content)" Buesing, Macke, Sahani

    - see also:

- "[Extracting low-dimensional dynamics from multiple large-scale neural population recordings by learning to predict correlations](https://www.mackelab.org/pubs/Nonnenmacher_Turaga_NIPS_2017.pdf)" Nonnenmacher et al.

- "[Black](https://arxiv.org/abs/1511.07367)[](https://arxiv.org/abs/1511.07367)[box](https://arxiv.org/abs/1511.07367)[variational inference for state space models](https://arxiv.org/abs/1511.07367)" (2015) Archer et al.

- "[Variational EM for SLDS (switching linear dynamical systems](https://github.com/slinderman/stats320/blob/main/lectures/lecture14.pdf))" Lecture by Linderman

### contstrained & regularized LDS identification

- \[++\] "[Learning stable, regularised latent models of neural population dynamics](https://pubmed.ncbi.nlm.nih.gov/22663075/)" Buesing, Macke, Sahani

- "[A Regularized Linear Dynamical System Framework for Multivariate Time Series Analysis](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4402162/)" Liu and Hauskrecht

- "[Identification of stable models in subspace identification by using regularization](https://ieeexplore.ieee.org/abstract/document/948469?casa_token=sLJOTFbUY-UAAAAA:FD1H2A-Lww0PUFbaMsTIPZF7m8tKqOoQcdFk4OAOzOoEJ7zEW3XkBRUvVM-mTr1MASLKJdKS)" Gestel et al.

- "[Learning Linear Dynamical Systems from Multivariate Time Series: A Matrix Factorization Based Framework](https://epubs.siam.org/doi/pdf/10.1137/1.9781611974348.91)" Liu and Hauskrecht

# **Software tools for dynamical systems**

### useful functions in MATLAB

- [`ss()`](https://www.mathworks.com/help/control/ref/ss.html) to build models

    - [`rss()`](https://www.mathworks.com/help/control/ref/rss.html) to generate random models

- [`ssest()`](https://www.mathworks.com/help/ident/ref/ssest.html?searchHighlight=ssest&s_tid=srchtitle) and [`ssregest()`](https://www.mathworks.com/help/ident/ref/ssregest.html) to fit models

    - [`modred()`](https://www.mathworks.com/help/control/ref/ss.modred.html?searchHighlight=modred&s_tid=srchtitle) to reduce model order

        - see also [`balred()`](https://www.mathworks.com/help/control/ref/lti.balred.html?searchHighlight=balred&s_tid=srchtitle), [Model Reducer app](https://www.mathworks.com/help/control/ref/modelreducer-app.html)

- for fitting nonlinearities: [`cftool()`](https://www.mathworks.com/help/curvefit/curvefitting-app.html?searchHighlight=cftool&s_tid=srchtitle) and [`fit()`](https://www.mathworks.com/help/curvefit/fit.html?searchHighlight=fit&s_tid=srchtitle)

- [`eig`,](https://www.mathworks.com/help/matlab/ref/eig.html?searchHighlight=eig&s_tid=srchtitle) [`pzmap`](https://www.mathworks.com/help/control/ref/lti.pzmap.html?searchHighlight=pzmap&s_tid=srchtitle) for inspecting eignevalues (and eigenvectors) of a system

### Other software for dynamical system modeling (mostly Python)

- [ldsCtrlEst:](https://github.com/lindermanlab/ssm) dynamical system estimation & control library - Stanley Rozell labs:[\[docs\]](https://stanley-rozell.github.io/lds-ctrl-est/) [\[code\]](https://github.com/stanley-rozell/lds-ctrl-est)

    - primarily focused on implementing dynamical systems within systems neuroscience experiments

- [hmm:](https://github.com/stanley-rozell/hmm) generation & decoding of hidden markov models [\[docs\]](https://stanley-rozell.github.io/hmm/) [\[code\]](https://github.com/stanley-rozell/hmm)

- [pmtk3](https://github.com/probml/pmtk3): probabilistic machine learning

    - usupported as of 2019, succeeded by [PyProbML](https://github.com/probml/pyprobml)

- "[SSM](https://github.com/lindermanlab/ssm): Bayesian learning and inference for state space models" [\[ink](https://github.com/lindermanlab/ssm)\]

- Additional

    - [GLMSpikeTool](https://github.com/pillowlab/GLMspiketools)s: Fitting and simulation of Poisson generalized linear model for single and multi-neuron spike trains [\[link\]](https://github.com/pillowlab/GLMspiketools)

        - associated paper: "[Spatio-temporal correlations and visual signalling in a complete neuronal population](https://www.nature.com/articles/nature07140)"

    - [pop\_spike\_dyn:](https://bitbucket.org/mackelab/pop_spike_dyn/src/master/)This repository contains different methods for linear dynamical system models with Poisson observations.

        - example script: [PLDSExample.m](https://bitbucket.org/mackelab/pop_spike_dyn/src/master/examples/PLDSExample.m)

    - [slinderman](https://github.com/slinderman)/[recurrent-slds](https://github.com/slinderman/recurrent-slds):

        - may be redundant with lindermanlab/ssm

    - [SSIDforPLDS:](https://bitbucket.org/larsbuesing/ssidforplds/src/master/) Subspace Identification for Poisson Linear Dynamical system

    - [poisson-gpfa](https://github.com/mackelab/poisson-gpfa): Gaussian process factor analysis with Poisson observations - Macke Lab

    - [hmmlearn:](https://github.com/hmmlearn/hmmlearn) set of algorithms for unsupervised learning and inference of Hidden Markov Models

        - see also [seqlearn](https://github.com/larsmans/seqlearn): sequence learning toolkit for python

    - [autohmm](https://github.com/mackelab/autohmm): packages provides an implementation of Hidden Markov Models (HMMs) with tied states and autoregressive observations, written in Python

# resources for understanding dynamical systems **in control**

### [UMich - Control tutorials for MATLAB and Simulink](https://ctms.engin.umich.edu/CTMS/index.php?aux=Home)

-  these controls tutorials by UMich are excellent, and involve some discussion of state-space representation of dynamical systems

### [Nonlinear control lectures - Slotine @ MIT](http://web.mit.edu/nsl/www/videos/lectures.html)

- good at bridging the intuitive and mathematical concepts

- topics include:

    - stability analysis (of nonlinear, time-varying systems)

    - robust & adaptive control

### Chapter 3: Dynamics, of “[Control System Design](http://clux.x-pec.com/files/fronter/ENE103%20-%20Reguleringsteknikk/fagstoff/suplement%20Reg%20tek%20engelsk%20.pdf)” by Karl Astrom is excellent.

- see also: "[Chapter 2. System Modeling](http://www.cds.caltech.edu/~murray/books/AM05/pdf/am08-complete_22Feb09.pdf)" from “Feedback Control” by Karl Astrom

### "[Linear Matrix Inequalities in System and Control Theory](https://web.stanford.edu/~boyd/lmibook/lmibook.pdf)" by Stephen Boyd

- excellent for constrained controller design

# experimental design / (model-based) stimulus optimization

### "[Automating the design of informative sequences of sensory stimuli](https://pubmed.ncbi.nlm.nih.gov/20556641/)" Lewi et al.

### “[Statistical models for neural encoding, decoding, and optimal stimulus design.](https://pubmed.ncbi.nlm.nih.gov/17925266/)” Paninski, Pillow, Lewi

# *Other reference lists:*

### Siplab Dynamics Zotero group (please email to request access):

- <https://www.zotero.org/groups/2174905/siplab>

### Some slides on interpretation of neural systems as dynamical systems which compute are presented here:

- [Dynamics In Neuro Lectures](https://github.com/awillats/Dynamics_In_Neuro_Lectures_2021)

### High-level references for understanding dynamics in neuro

- "[Neural circuits as computational dynamical systems](http://www.rctn.org/vs265/sussillo-dynamical-systems-curropin.pdf)" (2014) Sussillo

- “[Latent Factors and Dynamics in Motor Cortex and Their Application to Brain–Machine Interfaces](https://www.jneurosci.org/content/jneuro/38/44/9390.full.pdf)“ (2018) Pandarinath et al.

- "[Neural field models for latent state inference: Application to large-scale neuronal recordings](https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1007442)" (2019) Rule et al.

- “[Computation through Neural Population Dynamics](https://www.annualreviews.org/doi/abs/10.1146/annurev-neuro-092619-094115)” (2020) Vyas et al.

### Textbooks

- [Neuronal Dynamics](https://neuronaldynamics.epfl.ch/index.html)- Gerstner et al.

    - Has video lectures and python exercises

    - Covers a lot of math very clearly

- “[Data Driven Science & Engineering Machine Learning, Dynamical Systems, and Control"](http://www.databookuw.com/) Brunton & Kutz

- "[Probabilistic Machine Learning](https://probml.github.io/pml-book/)" - a book series by Kevin Murphy

    - has an associated codebase of tools: <https://github.com/probml/pyprobml/>

        - prior toolbox:

- Nonlinear Dynamics and Chaos - Strogatz

- “[Neuroscience](https://www.hse.ru/data/2011/06/22/1215686482/Neuroscience.pdf)” (2004) Purves et al
